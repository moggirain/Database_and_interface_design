drop TRIGGER if exists before_insert_bid; 
delimiter //
#A user may not bid on an item he or she is also selling
CREATE TRIGGER before_insert_bid BEFORE Insert ON Bid
FOR EACH ROW
Begin

IF exists (Select itemID, userID
From Item
Where itemID=New.itemID
And userID=New.userID) THEN 
CALL `Error1: A user may not bid on an item he or she is also selling.`;
  

# No auction may have two bids at the exact same time
ELSEIF New.time in (Select time from Bid) THEN
CALL `Error2: No auction may have two bids at the exact same time.`;


ELSEIF exists(Select itemID, started, ends
From Item
Where itemID=New.itemID
Having New.time<started or New.time>ends) THEN
CALL `Error3: Auction time is invalid.`;
 

# No user can make a bid of the same amount to same item more than once. 
ELSEIF exists(Select *
From Bid
Where itemID=New.itemID
And amount=New.amount
And userID=New.userID) THEN
CALL `Error4: Bid for the same item needs to have a new amount.`;


#Any new bid for a particular item must have a higher amount than any of the previous bids for that particular item
ELSEIF exists (Select * 
From Bid
Where itemID=New.itemID 
Having  New.amount<=max(amount)) THEN
CALL `Error5: Bid must go higher than the current bid.`;


# All new bids must be placed at the time which matches the current time of your AuctionBase system
ELSEIF exists (Select *
From Bid
Where New.time not in (Select timeNow 
From CurrentTime)) THEN 
CALL `Error6:Bids time must match the AuctionBase System.`; 
END IF;
END;//
Delimiter ;

Drop TRIGGER if exists after_insert_bid; 
delimiter //
#The current Price of an item must always match the Amount of the most recent bid for that item. 
CREATE TRIGGER after_insert_bid after Insert ON Bid
FOR EACH ROW
Begin
Update Item
Set Currently = New.amount
Where itemID = New.itemID;    
END;//
Delimiter ;

Drop TRIGGER if exists before_update_time;
delimiter //
#The current time of your AuctionBase system can only advance forward in time, not backward in time.
create TRIGGER before_update_time before update on CurrentTime 
for each row
begin
IF exists (Select timeNow 
From CurrentTime 
Where New.timeNow <= timeNow) 
THEN
CALL `Error 8: Time can be only advanced.`;
End if;
End;//
Delimiter ;





