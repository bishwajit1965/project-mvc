    <div class="col-sm-9 main-content mt-1">
        <div class="page-content-border-top"></div>
        <div class="admin-panel-page-header rounded text-capitalize text-center pt-2">
            <h6>Edit article</h6>
        </div>
        <div class="right-content-loader">
            <?php
            // if (array_key_exists('postErrors', $data)) {
            ?>

            <?php
            //     echo "<div class=\"alert alert-danger error-messages\">";
            //     echo '<span style="display:block;border-bottom:3px dashed #a40052;"><strong>ERROR(S)  found !!!</strong></span>';
            //     echo '<ol>';
            //     foreach ($data['postErrors']  as $key => $value) {
            //         switch ($key) {
            //         case 'title':
            //             foreach ($value as $insertError) {
            //                 echo '<li>';
            //                 echo "Title ". $insertError;
            //                 echo '</li>';
            //             }
            //             break;
            //         case 'author':
            //             foreach ($value as $insertError) {
            //                 echo '<li>';
            //                 echo "Author ". $insertError;
            //                 echo '</li>';
            //             }
            //             break;
            //         case 'category':
            //             foreach ($value as $insertError) {
            //                 echo '<li>';
            //                 echo "Category " . $insertError;
            //                 echo '</li>';
            //             }
            //             break;
            //         case 'synopsis':
            //             foreach ($value as $insertError) {
            //                 echo '<li>';
            //                 echo "Synopsis " . $insertError;
            //                 echo '</li>';
            //             }
            //             break;
            //         case 'content':
            //             foreach ($value as $insertError) {
            //                 echo '<li>';
            //                 echo "Content " . $insertError;
            //                 echo '</li>';
            //             }
            //             break;
            //         default:
            //             break;
            //     }
            //     }
            //     echo '</ol>';
            //     echo '</div>';
            // }
            ?>

            <form action="<?php echo BASE_URL; ?>?url=PostController/update/<?php echo $post->id; ?>" method="post">
                <?php
                if (array_key_exists('posts', $data)) {
                    foreach ($data['posts'] as $key => $post) {
                        ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control form-control-sm"
                                value="<?php echo isset($post->title)? $post->title:''; ?>" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="author" id="author" class="form-control form-control-sm"
                                        value="<?php echo isset($post->author)? $post->author:''; ?>"
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="form-control form-control-sm" name="category" id="category">
                                            <option>Select category</option>
                                            <?php
                                            if (array_key_exists('category', $data)) {
                                                foreach ($data['category'] as $key => $category) {
                                                    ?>
                                            <option value="<?php echo $category->id; ?>">
                                                <?php echo $category->name; ?>
                                            </option>
                                            <?php
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="synopsis" id="synopsis"
                        rows="2"><?php echo isset($post->synopsis)? $post->synopsis:''; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" id="editor1"
                        rows="4"><?php echo isset($post->content)? $post->content:''; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-upload"></i> Upload article</button>
                <?php
                    }
                }
                ?>
            </form>
        </div>
    </div>
    </div><!-- /Main content area ends here -->