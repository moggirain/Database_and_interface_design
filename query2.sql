select count(*) from (select (itemID) From Category
Group BY itemID
Having Count(category)=4) as C ;
