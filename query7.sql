select count(distinct a.userID, b.userID)
From Bid as a, Bid as b
Where a.itemID = b.itemID
And a.userID > b.userID;
