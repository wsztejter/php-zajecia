<div>
    <section>

        <div class="message">
            <?php
            if (!empty($params['error'])) {
                switch ($params['error']) {
                    case 'noteNotFound':
                        echo "Notatka nie została znleziona!";
                        break;
                    case 'missingNoteId':
                        echo 'Niepoprawny identyfikator notatki';
                        break;
                }
            }
            ?>
        </div>

        <div class="message">
            <?php
            if (!empty($params['before'])) {
                switch ($params['before']) {
                    case 'created':
                        echo "Notatka została utworzona!";
                        break;
                        case 'edited':
                        echo "Notatka zostala zaktualizowana";
                        break;
                        case 'deleted':
                            echo 'Notatka zostala usunieta';
                            break;
                }
            }
            ?>
        </div>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tytuł</th>
                        <th>Data</th>
                        <th>Opcje</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach ($params['notes'] ?? [] as $note) : ?>
                        <tr>
                            <td><?php echo $note['id'] ?></td>
                            <td><?php echo ($note['title']) ?></td>
                            <td><?php echo $note['created'] ?></td>
                            <td><a href="/?action=show&id=<?php echo (int) $note['id'] ?>">Opcje</a></td>
                            <td><a href="/?action=delete&id=<?php echo (int) $note['id'] ?>">Usun</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </sectiion>
</div>