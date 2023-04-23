<div>
    <div class="message">
        <?php
        if (!empty($params['before'])){
            switch ($params['before']){
                case 'created' :
                    echo "notatka została utworzona!";
                    break;
            }
        }
        ?>
        </div>
        <b>
            <?php echo $params['resultList'] ?? ""; ?>
    </b>
    </div>