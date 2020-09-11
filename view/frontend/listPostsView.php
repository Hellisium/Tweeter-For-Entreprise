<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-9">
        <div class="row">
            <div class="row border m-2 p-4">
                <div class="media">
                    <img src="public/images/huutai.jpeg" width="80" height="80" class="mr-3 rounded-circle" alt="...">
                    <div class="media-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3">Publication...</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row m-2">
            <form class="m-2">
                <div class="form-inline">
                    <input type="text" class="form-control">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
        </div>
            </form>
            <?php
            while ($data = $posts->fetch())
            {
                ?>
                <div class="row border m-2 p-4">
                    <div class="media">
                        <img src="public/images/huutai.jpeg" width="80" height="80" class="mr-3 rounded-circle" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0"><?= htmlspecialchars($data['title']) ?></h5>
                            <small class="text-muted"><?= $data['creation_date_fr'] ?></small>
                            <p>
                                <?= nl2br(htmlspecialchars($data['content'])) ?>
                                <br />
                                <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            $posts->closeCursor();
            ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
