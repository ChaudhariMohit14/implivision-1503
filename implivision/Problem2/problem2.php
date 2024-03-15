function check($transactions){
    $list=[]; //list for returning

    foreach($transactions as $transaction){
        if($transaction[3] > 10000){
            $list.add($transaction[1]);
        }
        else{
            foreach($transactions as $transaction1){
                if($transaction[2] == $transaction1[2]){
                    if($transaction[4] != $transaction1[4] && ($transaction[5]-$transaction1)<30){
                        $list.add($transaction1[1]);
                    }
                }
            }

        }

        
    }

}

$transactions = [ [1, 1000, 500.00, “Vadodara”, 0], [2, 1000, 500.00, “Mumbai”, 5], [3, 1001, 500.00, “Mumbai”, 10], [4, 
1001, 10000.00, “Mumbai”, 10] ]; 