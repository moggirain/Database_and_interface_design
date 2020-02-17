Select itemID
From Item
Where buy_price=(Select max(buy_price)
                 From Item);
                


