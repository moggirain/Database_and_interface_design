select count(*) from (select distinct userID
From Item 
Where userID in (Select userID 
                 From Bid) )as C;
