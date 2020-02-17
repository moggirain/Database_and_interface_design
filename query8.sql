
Select count(*)from
(Select distinct I.userID, count(C.category)
From Item I, Category C
Where I.itemID=C.itemID
Group by userID
Having count(Distinct C.category)>10
) as E;
