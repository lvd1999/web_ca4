
        <div id="navbar">
            <ul>
                <!-- display links for all categories -->
                <?php foreach($bullets as $bullet) : ?>
                <li>
                    <a href="?bullet_id=<?php 
                              echo $bullet['bulletID']; ?>">
                        <?php echo $bullet['bulletName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

