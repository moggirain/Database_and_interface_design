Select Count(distinct userID)
From Item 
Where userID in (Select userID
                 From User
                 Where rating>1000);




