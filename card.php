<?php
               
                    foreach ($posts as $post) {
                        $postCard = <<<HERE
                            <div class="col s12 m4">
                            
                                <div class="card hoverable small" style="height:400px">
                                    <div class="card-image">
                                        <img src="uploads/$post->postImage" alt="" height="150" width="150">
                                        <a href="?post=$post->postTitle" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p class="grey-text">$post->postTimestamp</p>
                                        <h5 style="font-weight: bold;">$post->postTitle</h5>
                                        <p class="grey-text text-darken-2">$post->postContent</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="?post=$post->postTitle" class="deep-orange-text">Read More</a>
                                    </div>
                                </div>
                            </div>
                        HERE;;
                        echo $postCard;
                    }
                ?>