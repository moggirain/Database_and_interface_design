
Select count(distinct category)
From Category C inner join 
(Select itemID from Bid Where amount>1000) As B on B.itemID=C.itemID

