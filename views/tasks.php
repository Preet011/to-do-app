<h2>Your Task List</h2>
<a href="index.php?action=add">Add a New Task</a>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            - <?php echo htmlspecialchars($task['title']) ?>
            <a href="index.php?action=delete&id=<?php echo htmlspecialchars($task['id']) ?>" class="delete-task">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
