<div class="show">
    <?php $note = $params['note'] ?? null; ?>
    <?php if ($note) : ?>
        <ul>
            <li>ID: <?php echo (int) $note['id'] ?></li>
            <li>Tytul: <?php echo htmlentities($note['title']) ?></li>
            <li>Opis: <?php echo htmlentities($note['description']) ?></li>
            <li>Utworzono: <?php echo htmlentities($note['created']) ?></li>
            <li>
                <a href="/">
                    <button>Powrot do listy notatek</button>
                </a>
            </li>
        </ul>
    <?php else : ?>
        <div>Brak notatki do wyswietlenia</div>
    <?php endif; ?>
</div>
NotFound:
class NotFoundException extends AppException
{
}