 <div id="profile-main" class="view-wrap is-headless">
                <div class="columns is-multiline no-margin">
                    <!-- Left side column -->
                    <div class="column is-paddingless">
                        <!-- Timeline Header -->
                        <!-- html/partials/pages/profile/timeline/timeline-header.html -->
                        <div class="cover-bg">
                            <img class="cover-image" src="https://via.placeholder.com/1600x460" data-demo-src="<?php echo  base_url($userProfile->data->profileImageUrl) ?>" alt="">
                            <div class="avatar">
                                <img id="user-avatar" class="avatar-image" src="https://via.placeholder.com/300x300" data-demo-src="<?php echo  base_url($userProfile->data->profileImageUrl) ?>" alt="">
                                <div class="avatar-button">
                                    <i data-feather="plus"></i>
                                </div>
                                <div class="pop-button is-far-left has-tooltip modal-trigger" data-modal="change-profile-pic-modal" data-placement="right" data-title="Change profile picture">
                                    <!--<a class="inner">-->
                                    <!--    <i data-feather="camera"></i>-->
                                    <!--</a>-->
                                </div>
                                <div id="follow-pop" class="pop-button pop-shift is-left has-tooltip" data-placement="top" data-title="Subscription">
                                    <a class="inner">
                                        <i class="inactive-icon" data-feather="bell"></i>
                                        <i class="active-icon" data-feather="bell-off"></i>
                                    </a>
                                </div>
                                <div id="invite-pop" class="pop-button pop-shift is-center has-tooltip" data-placement="top" data-title="Relationship">
                                    <a href="#" class="inner">
                                        <!--<i class="inactive-icon" data-feather="plus"></i>-->
                                        <!--<i class="active-icon" data-feather="minus"></i>-->
                                    </a>
                                </div>
                                <div id="chat-pop" class="pop-button is-right has-tooltip" data-placement="top" data-title="Chat">
                                    <a class="inner">
                                        <i data-feather="message-circle"></i>
                                    </a>
                                </div>
                                <div class="pop-button is-far-right has-tooltip" data-placement="right" data-title="Send message">
                                    <a href="messages-inbox.html" class="inner">
                                        <i data-feather="mail"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="cover-overlay"></div>
                            <!--<div class="cover-edit modal-trigger" data-modal="change-cover-modal">-->
                            <!--    <i class="mdi mdi-camera"></i>-->
                            <!--    <span>Edit cover image</span>-->
                            <!--</div>-->
                            <!--/html/partials/pages/profile/timeline/dropdowns/timeline-mobile-dropdown.html-->
                            <div class="dropdown is-spaced is-right is-accent dropdown-trigger timeline-mobile-dropdown is-hidden-desktop">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="profile-main.html" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="activity"></i>
                                                <div class="media-content">
                                                    <h3>Timeline</h3>
                                                    <small>Open Timeline.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-about.html" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="align-right"></i>
                                                <div class="media-content">
                                                    <h3>About</h3>
                                                    <small>See about info.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-friends.html" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="heart"></i>
                                                <div class="media-content">
                                                    <h3>Friends</h3>
                                                    <small>See friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-photos.html" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="image"></i>
                                                <div class="media-content">
                                                    <h3>Photos</h3>
                                                    <small>See all photos.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-menu is-hidden-mobile">
                            <div class="menu-start">
                                <a href="profile-main.html" class="button has-min-width">Timeline</a>
                                <a href="profile-about.html" class="button has-min-width">About</a>
                            </div>
                            <div class="menu-end">
                                <a id="profile-friends-link" href="profile-friends.html" class="button has-min-width">Friends</a>
                                <a href="profile-photos.html" class="button has-min-width">Photos</a>
                            </div>
                        </div>

                        <div class="profile-subheader">
                            <div class="subheader-start is-hidden-mobile">
                                <!--<span><?php echo $userProfile->data->following; ?></span>-->
                                <!--<span>Following</span>-->
                            </div>
                            <div class="subheader-middle">
                                <h2><?php echo $userProfile->data->userName; ?></h2>
                                <span>Media Influencer</span>
                            </div>
                            <div class="subheader-end is-hidden-mobile">
                                <?php if($userProfile->data->IsFriend=="Friend"){ ?>
                                <a class="button has-icon is-bold">
                                    <i data-feather="user-check"></i>
                                    <?php echo $userProfile->data->IsFriend; ?>
                                </a>
                                <?php }elseif($userProfile->data->IsFriend=="follow"){ ?>
                                 <a class="button has-icon is-bold">
                                    <i data-feather="user-plus"></i>
                                    <?php echo $userProfile->data->IsFriend; ?>
                                </a>
                                <?php }else{?>
                                 <a class="button has-icon is-bold">
                                    <i data-feather="user"></i>
                                    <?php echo $userProfile->data->IsFriend; ?>
                                </a>
                                <?php 
                                } ?>
                               
                            </div>
                        </div>
                    </div>

                </div>

                <div class="columns">
                    <div id="profile-timeline-widgets" class="column is-4">

                        <!-- Basic Infos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/basic-infos-widget.html -->
                        <div class="box-heading">
                            <h4>Basic Infos</h4>
                            <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="profile-about.html" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="eye"></i>
                                                <div class="media-content">
                                                    <h3>View</h3>
                                                    <small>View user details.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="search"></i>
                                                <div class="media-content">
                                                    <h3>Related</h3>
                                                    <small>Search for related users.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basic-infos-wrapper">
                            <div class="card is-profile-info">
                                <div class="info-row">
                                    <div>
                                        <span>Date Of Birth</span>
                                        <a class="is-inverted"><?php echo $userProfile->data->DOB  ?></a>
                                    </div>
                                    <i class="mdi mdi-school"></i>
                                </div>
                                <div class="info-row">
                                    <div>
                                        <span>Gender</span>
                                        <a class="is-inverted"><?php echo $userProfile->data->gender  ?></a>
                                    </div>
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <div class="info-row">
                                    <div>
                                        <span>From</span>
                                        <a class="is-inverted"><?php echo $userProfile->data->country; ?></a>
                                    </div>
                                    <i class="mdi mdi-earth"></i>
                                </div>
                                <div class="info-row">
                                    <div>
                                        <span>Lives in</span>
                                        <a class="is-inverted"><?php echo $userProfile->data->address ?></a>
                                    </div>
                                    <i class="mdi mdi-map-marker"></i>
                                </div>
                                <div class="info-row">
                                    <div>
                                        <span>Followers</span>
                                        <a class="is-muted"><?php echo $userProfile->data->follower; ?> followers</a>
                                    </div>
                                    <i class="mdi mdi-bell-ring"></i>
                                </div>
                                 <div class="info-row">
                                    <div>
                                        <span>Following</span>
                                        <a class="is-muted"><?php echo $userProfile->data->following; ?> following</a>
                                    </div>
                                    <i class="mdi mdi-bell-ring"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Photos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/photos-widget.html -->
                        <div class="box-heading">
                            <h4>Photos</h4>
                            <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="image"></i>
                                                <div class="media-content">
                                                    <h3>View Photos</h3>
                                                    <small>View all your photos</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="tag"></i>
                                                <div class="media-content">
                                                    <h3>Tagged</h3>
                                                    <small>View photos you are tagged in.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="folder"></i>
                                                <div class="media-content">
                                                    <h3>Albums</h3>
                                                    <small>Open my albums.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="is-photos-widget">
                            <?php foreach($photos as $photo){ ?>
                            <img src="https://via.placeholder.com/200x200" data-demo-src="<?php echo base_url($photo['postFileUrl']); ?>" alt="">
                            <?php } ?>
                          
                        </div>
                        <!-- Star friends widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/star-friends-widget.html -->
                        <div class="box-heading">
                            <h4>Friends</h4>
                            <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="users"></i>
                                                <div class="media-content">
                                                    <h3>All Friends</h3>
                                                    <small>View all friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="heart"></i>
                                                <div class="media-content">
                                                    <h3>Family</h3>
                                                    <small>View family members.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="briefcase"></i>
                                                <div class="media-content">
                                                    <h3>Work Relations</h3>
                                                    <small>View work related friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="friend-cards-list">
                            <div class="card is-friend-card">
                            <?php if(!empty($post)) {foreach($friends as $friend){ ?>
                                <div class="friend-item">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="<?php echo base_url($friend->profileImageUrl); ?>" alt="" data-user-popover="1">
                                    <div class="text-content">
                                        <a><?php echo $friend->userName; ?></a>
                                        <!--<span>4 mutual friend(s)</span>-->
                                    </div>
                                    <!--<div class="star-friend">-->
                                    <!--    <i data-feather="star"></i>-->
                                    <!--</div>-->
                                </div>
                             <?php } }else{?>
                              <h4 class="alert alert-warning"><?php echo $message; ?></h4>
                             <?php } ?>

                            </div>
                        </div>
                        <!-- Videos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/videos-widget.html -->
                        <!--<div class="box-heading">-->
                        <!--    <h4>Videos</h4>-->
                        <!--    <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">-->
                        <!--        <div>-->
                        <!--            <div class="button">-->
                        <!--                <i data-feather="more-vertical"></i>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="dropdown-menu" role="menu">-->
                        <!--            <div class="dropdown-content">-->
                        <!--                <a class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="video"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>View Videos</h3>-->
                        <!--                            <small>View all your videos</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--                <a href="#" class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="tag"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>Tagged</h3>-->
                        <!--                            <small>View videos you are tagged in.</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="is-videos-widget">-->

                        <!--    <div class="video-container">-->
                        <!--        <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/1.jpg" alt="">-->
                        <!--        <div class="video-button">-->
                        <!--            <img src="assets/img/icons/video/play.svg" alt="">-->
                        <!--        </div>-->
                        <!--        <div class="video-overlay"></div>-->
                        <!--    </div>-->

                        <!--    <div class="video-container">-->
                        <!--        <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/2.jpg" alt="">-->
                        <!--        <div class="video-button">-->
                        <!--            <img src="assets/img/icons/video/play.svg" alt="">-->
                        <!--        </div>-->
                        <!--        <div class="video-overlay"></div>-->
                        <!--    </div>-->

                        <!--    <div class="video-container">-->
                        <!--        <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/3.jpg" alt="">-->
                        <!--        <div class="video-button">-->
                        <!--            <img src="assets/img/icons/video/play.svg" alt="">-->
                        <!--        </div>-->
                        <!--        <div class="video-overlay"></div>-->
                        <!--    </div>-->

                        <!--</div>-->
                        <!-- Trips widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/trips-widget.html -->
                        <!--<div class="box-heading">-->
                        <!--    <h4>Trips</h4>-->
                        <!--    <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">-->
                        <!--        <div>-->
                        <!--            <div class="button">-->
                        <!--                <i data-feather="more-vertical"></i>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="dropdown-menu" role="menu">-->
                        <!--            <div class="dropdown-content">-->
                        <!--                <a class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="globe"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>View my Trips</h3>-->
                        <!--                            <small>View all your trips</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--                <a href="#" class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="compass"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>Suggestions</h3>-->
                        <!--                            <small>View trendy suggestions.</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="trip-cards-list">-->
                        <!--    <div class="card is-trip-card">-->

                        <!--        <div class="trip-item">-->
                        <!--            <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/1.jpg" alt="">-->
                        <!--            <div class="text-content">-->
                        <!--                <a>New York, NY, USA</a>-->
                        <!--                <span>4 months ago</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="trip-item">-->
                        <!--            <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/2.jpg" alt="">-->
                        <!--            <div class="text-content">-->
                        <!--                <a>Paris, France</a>-->
                        <!--                <span>8 months ago</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="trip-item">-->
                        <!--            <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/3.jpg" alt="">-->
                        <!--            <div class="text-content">-->
                        <!--                <a>Madrid, Spain</a>-->
                        <!--                <span>a year ago</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="trip-item">-->
                        <!--            <img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/4.jpg" alt="">-->
                        <!--            <div class="text-content">-->
                        <!--                <a>Marrakech, Morocco</a>-->
                        <!--                <span>a year ago</span>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="box-heading">-->
                        <!--    <h4>Events</h4>-->
                        <!--    <div class="dropdown is-neutral is-spaced is-right dropdown-trigger">-->
                        <!--        <div>-->
                        <!--            <div class="button">-->
                        <!--                <i data-feather="more-vertical"></i>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="dropdown-menu" role="menu">-->
                        <!--            <div class="dropdown-content">-->
                        <!--                <a class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="calendar"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>All Events</h3>-->
                        <!--                            <small>View all your events</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--                <a href="#" class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="search"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>Search</h3>-->
                        <!--                            <small>Search for events.</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--                <a href="#" class="dropdown-item">-->
                        <!--                    <div class="media">-->
                        <!--                        <i data-feather="compass"></i>-->
                        <!--                        <div class="media-content">-->
                        <!--                            <h3>Suggestions</h3>-->
                        <!--                            <small>View trendy suggestions.</small>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!-- Schedule calendar widget -->
                        <!-- html/partials/widgets/schedule/schedule-widget.html -->
                        <!--<div class="schedule">-->
                        <!--    <div class="schedule-day-container hidden">-->
                        <!--        <div class="day-header day-header--large">-->
                        <!--            <div class="day-header-bg"></div>-->
                        <!--            <div class="day-header-close">-->
                        <!--                <i data-feather="x"></i>-->
                        <!--            </div>-->
                        <!--            <div class="day-header-content">-->
                        <!--                <div class="day-header-title">-->
                        <!--                    <div class="day-header-title-day">24</div>-->
                        <!--                    <div class="day-header-title-month">October</div>-->
                        <!--                </div>-->
                        <!--                <div class="day-header-event">Workout Session</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="day-content has-slimscroll">-->

                                    <!-- Event 1 details -->
                                    <!-- html/partials/widgets/schedule/event-details/event-1.html -->
                        <!--            <div id="event-1" class="event-details-wrap">-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-lock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Private</span>-->
                        <!--                        <span>This is a private event</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-map-marker"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Where</span>-->
                        <!--                        <span>@ Mom and Dad's house</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-progress-clock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>When</span>-->
                        <!--                        <span>02:00pm - 03:30pm</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="participants-wrap">-->
                        <!--                    <label>4 Participants</label>-->
                        <!--                    <div class="participants">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="" data-user-popover="9">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="" data-user-popover="7">-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="event-description">-->
                        <!--                    <label>Description</label>-->
                        <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores itaque repudiandae.</p>-->
                        <!--                </div>-->
                        <!--                <hr>-->
                        <!--                <div class="button-wrap">-->
                        <!--                    <a class="button is-bold">Participating</a>-->
                        <!--                    <a class="button is-bold">Details</a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- Event 2 details -->
                                    <!-- html/partials/widgets/schedule/event-details/event-2.html -->
                        <!--            <div id="event-2" class="event-details-wrap">-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-lock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Private</span>-->
                        <!--                        <span>This is a private event</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-map-marker"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Where</span>-->
                        <!--                        <span>@ <a class="is-inverted">Wayne's Coffeeshop</a>, LA</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-progress-clock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>When</span>-->
                        <!--                        <span>11:00am - 12:30pm</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="participants-wrap">-->
                        <!--                    <label>3 Participants</label>-->
                        <!--                    <div class="participants">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="" data-user-popover="4">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt="" data-user-popover="13">-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="event-description">-->
                        <!--                    <label>Description</label>-->
                        <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores itaque repudiandae.</p>-->
                        <!--                </div>-->
                        <!--                <hr>-->
                        <!--                <div class="button-wrap">-->
                        <!--                    <a class="button is-bold">Participating</a>-->
                        <!--                    <a class="button is-bold">Details</a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- Event 3 details -->
                                    <!-- html/partials/widgets/schedule/event-details/event-3.html -->
                        <!--            <div id="event-3" class="event-details-wrap">-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-earth"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Public</span>-->
                        <!--                        <span>This is a public event</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-map-marker"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Where</span>-->
                        <!--                        <span>@ Frank's appartment</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-progress-clock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>When</span>-->
                        <!--                        <span>08:00pm - 02:00am</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="participants-wrap">-->
                        <!--                    <label>29 Participants</label>-->
                        <!--                    <div class="participants">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="" data-user-popover="3">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt="" data-user-popover="13">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="" data-user-popover="7">-->
                        <!--                        <div class="is-more">+24</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="event-description">-->
                        <!--                    <label>Description</label>-->
                        <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores itaque repudiandae.</p>-->
                        <!--                </div>-->
                        <!--                <hr>-->
                        <!--                <div class="button-wrap">-->
                        <!--                    <a class="button is-bold">Participating</a>-->
                        <!--                    <a class="button is-bold">Details</a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- Event 4 details -->
                                    <!-- html/partials/widgets/schedule/event-details/event-4.html -->
                        <!--            <div id="event-4" class="event-details-wrap">-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-lock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Private</span>-->
                        <!--                        <span>This is a private event</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-map-marker"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Where</span>-->
                        <!--                        <span>@ <a class="is-inverted">Gold Gym</a>, LA</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-progress-clock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>When</span>-->
                        <!--                        <span>05:00pm - 07:00pm</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="participants-wrap">-->
                        <!--                    <label>2 Participants</label>-->
                        <!--                    <div class="participants">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" alt="" data-user-popover="10">-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="event-description">-->
                        <!--                    <label>Description</label>-->
                        <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores itaque repudiandae.</p>-->
                        <!--                </div>-->
                        <!--                <hr>-->
                        <!--                <div class="button-wrap">-->
                        <!--                    <a class="button is-bold">Participating</a>-->
                        <!--                    <a class="button is-bold">Details</a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- Event 5 details -->
                                    <!-- html/partials/widgets/schedule/event-details/event-5.html -->
                        <!--            <div id="event-5" class="event-details-wrap">-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-lock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Private</span>-->
                        <!--                        <span>This is a private event</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-map-marker"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>Where</span>-->
                        <!--                        <span>@ <a class="is-inverted">Massive Dynamics Office</a>, LA</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="meta-block">-->
                        <!--                    <i class="mdi mdi-progress-clock"></i>-->
                        <!--                    <div class="meta">-->
                        <!--                        <span>When</span>-->
                        <!--                        <span>08:30am - 10:00am</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="participants-wrap">-->
                        <!--                    <label>29 Participants</label>-->
                        <!--                    <div class="participants">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="" data-user-popover="1">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="" data-user-popover="5">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" alt="" data-user-popover="12">-->
                        <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" alt="" data-user-popover="11">-->
                        <!--                        <div class="is-more">+4</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="event-description">-->
                        <!--                    <label>Description</label>-->
                        <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores itaque repudiandae.</p>-->
                        <!--                </div>-->
                        <!--                <hr>-->
                        <!--                <div class="button-wrap">-->
                        <!--                    <a class="button is-bold">Participating</a>-->
                        <!--                    <a class="button is-bold">Details</a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="schedule-header">-->
                        <!--        <div class="nav-icon">-->
                        <!--            <i data-feather="chevron-left"></i>-->
                        <!--        </div>-->
                        <!--        <div class="month">October</div>-->
                        <!--        <div class="nav-icon">-->
                        <!--            <i data-feather="chevron-right"></i>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="schedule-calendar">-->
                        <!--        <div class="calendar-row day-row">-->
                        <!--            <div class="day day-name">M</div>-->
                        <!--            <div class="day day-name">T</div>-->
                        <!--            <div class="day day-name">W</div>-->
                        <!--            <div class="day day-name">T</div>-->
                        <!--            <div class="day day-name">F</div>-->
                        <!--            <div class="day day-name">S</div>-->
                        <!--            <div class="day day-name">S</div>-->
                        <!--        </div>-->
                        <!--        <div class="calendar-row">-->
                        <!--            <div class="day">&nbsp;</div>-->
                        <!--            <div class="day">&nbsp;</div>-->
                        <!--            <div class="day">1</div>-->
                        <!--            <div class="day event green" data-content="1" data-day="2" data-event="Eat at mom and dad's">2</div>-->
                        <!--            <div class="day">3</div>-->
                        <!--            <div class="day">4</div>-->
                        <!--            <div class="day">5</div>-->
                        <!--        </div>-->
                        <!--        <div class="calendar-row">-->
                        <!--            <div class="day">6</div>-->
                        <!--            <div class="day event purple" data-content="2" data-day="7" data-event="Meet customer in LA">7</div>-->
                        <!--            <div class="day">8</div>-->
                        <!--            <div class="day">9</div>-->
                        <!--            <div class="day">10</div>-->
                        <!--            <div class="day">11</div>-->
                        <!--            <div class="day">12</div>-->
                        <!--        </div>-->
                        <!--        <div class="calendar-row">-->
                        <!--            <div class="day">13</div>-->
                        <!--            <div class="day">14</div>-->
                        <!--            <div class="day">15</div>-->
                        <!--            <div class="day">16</div>-->
                        <!--            <div class="day">17</div>-->
                        <!--            <div class="day">18</div>-->
                        <!--            <div class="day">19</div>-->
                        <!--        </div>-->
                        <!--        <div class="calendar-row">-->
                        <!--            <div class="day">20</div>-->
                        <!--            <div class="day">21</div>-->
                        <!--            <div class="day event green" data-content="3" data-day="22" data-event="Frank's birthday">22</div>-->
                        <!--            <div class="day">23</div>-->
                        <!--            <div class="day event primary" data-content="4" data-day="24" data-event="Workout Session">24</div>-->
                        <!--            <div class="day">25</div>-->
                        <!--            <div class="day event purple" data-content="5" data-day="26" data-event="Project review">26</div>-->
                        <!--        </div>-->
                        <!--        <div class="calendar-row">-->
                        <!--            <div class="day">27</div>-->
                        <!--            <div class="day">28</div>-->
                        <!--            <div class="day">29</div>-->
                        <!--            <div class="day">30</div>-->
                        <!--            <div class="day"></div>-->
                        <!--            <div class="day"></div>-->
                        <!--            <div class="day"></div>-->
                        <!--        </div>-->
                        <!--        <div class="next-fab">-->
                        <!--            <i data-feather="chevron-down"></i>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="schedule-divider"></div>-->
                        <!--    <div class="schedule-events">-->
                        <!--        <div class="schedule-events-title">-->
                        <!--            Upcoming events-->
                        <!--        </div>-->
                        <!--        <div class="schedule-event">-->
                        <!--            <div class="event-date green">2</div>-->
                        <!--            <div class="event-title">-->
                        <!--                <span>Eat at mom and dad's</span>-->
                        <!--                <span>07:30pm | Home</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="schedule-event">-->
                        <!--            <div class="event-date purple">7</div>-->
                        <!--            <div class="event-title">-->
                        <!--                <span>Meet customer in LA</span>-->
                        <!--                <span>11:00am | St Luc Café</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="schedule-event">-->
                        <!--            <div class="event-date green">22</div>-->
                        <!--            <div class="event-title">-->
                        <!--                <span>Frank's birthday</span>-->
                        <!--                <span>03:00pm | Frank's home</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="schedule-event">-->
                        <!--            <div class="event-date primary">24</div>-->
                        <!--            <div class="event-title">-->
                        <!--                <span>Workout session</span>-->
                        <!--                <span>07:00am | Gold Gym</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="schedule-event">-->
                        <!--            <div class="event-date purple">26</div>-->
                        <!--            <div class="event-title">-->
                        <!--                <span>Project review</span>-->
                        <!--                <span>08:00am | Office</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="button-wrap">-->
                        <!--            <a class="button is-fullwidth has-icon"><i data-feather="plus"></i>New Event</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>

                    <div class="column is-8">
                        <div id="profile-timeline-posts" class="box-heading">
                            <h4>Posts</h4>
                            <!--<div class="button-wrap">-->
                            <!--    <button type="button" class="button is-active">Recent</button>-->
                            <!--    <button type="button" class="button">Popular</button>-->
                            <!--</div>-->
                        </div>

                        <div class="profile-timeline">

                            <!-- Timeline post 1 -->
                            <!-- html/partials/pages/profile/posts/timeline-post1.html -->
                            <!-- Timeline POST #1 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <!--<div class="time is-hidden-mobile">-->
                                <!--    <div class="img-container">-->
                                <!--        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- Post -->
                                  <div class="postdata">
                        <?php if(!empty($post)) { foreach ($post as $posts) { ?>
                            <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="<?php echo base_url().'/'.$userProfile->data->profileImageUrl ?>" data-user-popover="2" alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#"><?php echo $userProfile->data->userName ?></a>
                                            <span class="time"><?php echo $date = date("d-m-Y", strtotime($posts->posted_date)) ?></span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p><?php echo $posts->caption ?>
                                        <p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <!-- CSS masonry wrap -->
                                        <div class="masonry-grid">
                                            <!-- Left column -->
                                            <?php  foreach ($posts->postFiles as $postFiles) { ?>
                                            <div class="masonry-column-left">
                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="<?php echo base_url().$postFiles->postFileUrl ?>" data-demo-href="<?php echo base_url().$postFiles->postFileUrl ?>">
                                                    <img src="<?php echo base_url() . $postFiles->postFileUrl ?>" style="height:300px;padding:2px" alt="">
                                                </a>
                                               
                                            </div>
                                            <?php } ?>
                                            <!-- Right column -->
                                            <!-- <div class="masonry-column-right">
                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="<?php echo base_url() ?>assets/img/demo/unsplash/5.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="<?php echo base_url() ?>assets/img/demo/unsplash/5.jpg">
                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="<?php echo base_url() ?>assets/img/demo/unsplash/5.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="<?php echo base_url() ?>assets/img/demo/unsplash/6.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="<?php echo base_url() ?>assets/img/demo/unsplash/6.jpg">
                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="<?php echo base_url() ?>assets/img/demo/unsplash/6.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="<?php echo base_url() ?>assets/img/demo/unsplash/7.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="<?php echo base_url() ?>assets/img/demo/unsplash/7.jpg">
                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="<?php echo base_url() ?>assets/img/demo/unsplash/7.jpg" alt="">
                                                </a>
                                            </div> -->
                                            <!-- Post actions -->
                                            <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                            <div class="like-wrapper">
                                                <a href="javascript:void(0);" class="like-button " onclick="javascript:savelike(<?php echo $posts->postId ?>);">
                                                    <i class="mdi mdi-heart not-liked bouncy"></i>
                                                    <i class="mdi mdi-heart is-liked bouncy"></i>
                                                    <span class="like-overlay"></span>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-share">
                                                <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">
                                                    <i data-feather="link-2"></i>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-comment" onclick="javascript:fetchcomment(<?php echo $posts->postId ?>);">
                                                <a href="javascript:void(0);" class="small-fab">
                                                    <i data-feather="message-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        
                                    </div>
                                    <div class="likers-text">
                                      
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span class="likedata"><?php echo $posts->totalLike ?></span>
                                        </div>
                                        <!-- <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>1</span>
                                        </div> -->
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span><?php echo $posts->totalComment ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- Main wrap -->

                            <!-- Post #4 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments
                                        <small>(<?php echo $posts->totalComment ?>)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll comment">

                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="<?php echo base_url() ?>assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #4 comments -->
                        </div>
                        <?php } } else { ?>
                            <h4 class="alert alert-warning"><?php echo $postmessage; ?></h4>
                            <?php } ?>
                        </div>
                                <!-- /Post -->
                            </div>
                            <!-- /Timeline POST #3 -->
                            <!-- Timeline post 2 -->
                            <!-- html/partials/pages/profile/posts/timeline-post2.html -->
                            <!-- Timeline POST #2 -->
                            <!--<div class="profile-post">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post has-nested">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Elise Walker shared-->
                            <!--                            <span>Dan Walker's post</span> on your feed</a>-->
                            <!--                        <span class="time">July 19 2018, 19:42pm</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>My brother went to their concert last night, and looks like he had tons of fun. We should really do things-->
                            <!--                        like this together.-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Featured image -->

                                            <!-- Nested Post (Shared) -->
                            <!--                <div class="card is-post is-nested">-->
                                                <!-- Main wrap -->
                            <!--                    <div class="content-wrap">-->
                                                    <!-- Post header -->
                            <!--                        <div class="card-heading">-->
                                                        <!-- User meta -->
                            <!--                            <div class="user-block">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">-->
                            <!--                                </div>-->
                            <!--                                <div class="user-info">-->
                            <!--                                    <a href="#">Dan Walker</a>-->
                            <!--                                    <span class="time">July 26 2018, 01:03pm</span>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Post header -->

                                                    <!-- Post body -->
                            <!--                        <div class="card-body">-->
                                                        <!-- Post body text -->
                            <!--                            <div class="post-text">-->
                            <!--                                <p>Yesterday with-->
                            <!--                                    <a href="#">@Karen Miller</a> and-->
                            <!--                                    <a href="#">@Marvin Stemperd</a> at the-->
                            <!--                                    <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic! People were really excited about-->
                            <!--                                    this one!-->
                            <!--                                </p>-->
                            <!--                            </div>-->
                                                        <!-- Featured image -->
                            <!--                            <div class="post-image">-->
                            <!--                                <a data-fancybox="profile-post2" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/1.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/1.jpg">-->
                            <!--                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/1.jpg" alt="">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Post body -->
                            <!--                    </div>-->
                                                <!-- /Main wrap -->
                            <!--                </div>-->
                                            <!-- /Nested Post (Shared) -->
                            <!--                <div class="action-wrap">-->
                                                <!-- Post actions -->
                            <!--                    <div class="like-wrapper">-->
                            <!--                        <a href="javascript:void(0);" class="like-button">-->
                            <!--                            <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                            <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                            <span class="like-overlay"></span>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-share">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                            <i data-feather="link-2"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-comment">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab">-->
                            <!--                            <i data-feather="message-circle"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p>-->
                            <!--                        <a href="#">Jenna</a>,-->
                            <!--                        <a href="#">Edward</a>-->
                            <!--                    </p>-->
                            <!--                    <p>and 3 more liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>5</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>0</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>4</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- /Main wrap -->

                                    <!-- Comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments-->
                            <!--                    <small>(4)</small>-->
                            <!--                </h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body has-slimscroll">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">David Kim</a>-->
                            <!--                        <span class="time">5 hours ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Daniel Wellington</a>-->
                            <!--                                <span class="time">3 minutes ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>4</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Edward Mayers</a>-->
                            <!--                        <span class="time">Yesterday</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>3</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Nelly Schwartz</a>-->
                            <!--                        <span class="time">2 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->
                            <!--            </div>-->
                                        <!-- Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- /Timeline POST #2 -->
                            <!-- Timeline post 3 -->
                            <!-- html/partials/pages/profile/posts/timeline-post3.html -->
                            <!-- Timeline POST #3 -->
                            <!--<div class="profile-post">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Jenna Davis</a>-->
                            <!--                        <span class="time">October 09 2018, 11:03am</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>Today i visited this amazing little fashion store in Church street. Everything is handmade, from skirts-->
                            <!--                        to bags. Their products really have an outstanding quality. If you don't know them already, well-->
                            <!--                        it's time to make your move!-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Featured image -->
                            <!--                <div class="post-image">-->
                            <!--                    <a data-fancybox="profile-post3" data-lightbox-type="comments" data-thumb="/assets/img/demo/video/dress.jpg" href="#myVideo">-->
                            <!--                        <img src="https://via.placeholder.com/1600x900" data-demo-src="/assets/img/demo/video/dress.jpg" alt="">-->
                            <!--                    </a>-->
                                                <!-- Post actions -->
                            <!--                    <div class="like-wrapper">-->
                            <!--                        <a href="javascript:void(0);" class="like-button">-->
                            <!--                            <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                            <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                            <span class="like-overlay"></span>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-share">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                            <i data-feather="link-2"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-comment">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab">-->
                            <!--                            <i data-feather="message-circle"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p>-->
                            <!--                        <a href="#">Milly</a>,-->
                            <!--                        <a href="#">David</a>-->
                            <!--                    </p>-->
                            <!--                    <p>and 56 more liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>58</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>12</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>9</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- /Main wrap -->

                                    <!-- Comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments-->
                            <!--                    <small>(9)</small>-->
                            <!--                </h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body has-slimscroll">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Milly Augustine</a>-->
                            <!--                        <span class="time">1 hour ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Edward Mayers</a>-->
                            <!--                                <span class="time">30 minutes ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>3</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Elise Walker</a>-->
                            <!--                                <span class="time">15 minutes ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>0</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Stella Bergmann</a>-->
                            <!--                        <span class="time">1 hour ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>5</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Jenna Davis</a>-->
                            <!--                                <span class="time">30 minutes ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>0</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Edward Mayers</a>-->
                            <!--                        <span class="time">Yesterday</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>3</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Nelly Schwartz</a>-->
                            <!--                        <span class="time">2 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Jenna Davis</a>-->
                            <!--                                <span class="time">2 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>3</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Elise Walker</a>-->
                            <!--                                <span class="time">2 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>0</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->
                            <!--            </div>-->
                                        <!-- Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- Timeline POST #3 -->

                            <!--<video width="800" height="450" controls id="myVideo" style="display:none;">-->
                            <!--    <source src="assets/img/demo/video/source/dress.mp4" type="video/mp4">-->
                            <!--    <source src="assets/img/demo/video/source/dress.webm" type="video/webm">-->
                            <!--    <source src="assets/img/demo/video/source/dress.ogg" type="video/ogg">-->
                            <!--    Your browser doesn't support HTML5 video tag.-->
                            <!--</video>-->
                            <!-- Timeline post 4 -->
                            <!-- html/partials/pages/profile/posts/timeline-post4.html -->
                            <!-- Timeline POST #4 -->
                            <!--<div class="profile-post">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Jenna Davis</a>-->
                            <!--                        <span class="time">September 26 2018, 11:18am</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- Right side dropdown -->
                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>Hello everyone! Today iam posting a review of the latest shoe trends. I tried for you more than 30 pairs of shoes. I had some crushes and some deceptions, However, it was a great experience i would like to share with you.-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Featured image -->
                            <!--                <div class="post-image">-->
                                                <!-- CSS masonry wrap -->
                            <!--                    <div class="masonry-grid">-->
                                                    <!-- Left column -->
                            <!--                        <div class="masonry-column-left">-->
                            <!--                            <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/9.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/9.jpg">-->
                            <!--                                <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/9.jpg" alt="">-->
                            <!--                            </a>-->
                            <!--                            <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/10.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/10.jpg">-->
                            <!--                                <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/10.jpg" alt="">-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                                                    <!-- Right column -->
                            <!--                        <div class="masonry-column-right">-->
                            <!--                            <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/11.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/11.jpg">-->
                            <!--                                <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/11.jpg" alt="">-->
                            <!--                            </a>-->
                            <!--                            <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/12.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/12.jpg">-->
                            <!--                                <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/12.jpg" alt="">-->
                            <!--                            </a>-->
                            <!--                            <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/13.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/13.jpg">-->
                            <!--                                <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/13.jpg" alt="">-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                                                    <!-- Post actions -->
                            <!--                        <div class="like-wrapper">-->
                            <!--                            <a href="javascript:void(0);" class="like-button">-->
                            <!--                                <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                                <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                                <span class="like-overlay"></span>-->
                            <!--                            </a>-->
                            <!--                        </div>-->

                            <!--                        <div class="fab-wrapper is-share">-->
                            <!--                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                                <i data-feather="link-2"></i>-->
                            <!--                            </a>-->
                            <!--                        </div>-->

                            <!--                        <div class="fab-wrapper is-comment">-->
                            <!--                            <a href="javascript:void(0);" class="small-fab">-->
                            <!--                                <i data-feather="message-circle"></i>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p>-->
                            <!--                        <a href="#">Mike</a>,-->
                            <!--                        <a href="#">Rolf</a>-->
                            <!--                    </p>-->
                            <!--                    <p>and 31 more liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>33</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>3</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>8</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- Main wrap -->

                                    <!-- Comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments-->
                            <!--                    <small>(8)</small>-->
                            <!--                </h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body has-slimscroll">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Stella Bergmann</a>-->
                            <!--                        <span class="time">17 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>0</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Jenna Davis</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>4</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">David Kim</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>1</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Milly Augustine</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>1</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Daniel Wellington</a>-->
                            <!--                        <span class="time">17 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>6</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">David Kim</a>-->
                            <!--                        <span class="time">18 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>5</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Stella Bergmann</a>-->
                            <!--                                <span class="time">18 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>7</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Mike Lasalle</a>-->
                            <!--                        <span class="time">20 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>5</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Load More comments -->
                            <!--                <div class="load-more has-text-centered">-->
                            <!--                    <button class="load-more-button">-->
                            <!--                        <i data-feather="more-horizontal"></i>-->
                            <!--                    </button>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- /timeline POST #4 -->
                            <!-- Timeline post 5 -->
                            <!-- html/partials/pages/profile/posts/timeline-post5.html -->
                            <!-- Timeline POST #5 -->
                            <!--<div class="profile-post is-simple">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                                            <!-- User image -->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Jenna Davis</a>-->
                            <!--                        <span class="time">September 17 2018, 10:23am</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>Hello guys, I need a ride because I need to go to <a href="#">#Los Angeles</a> to see a customer. I didn't have time to buy a train ticket so can anyone pick me up in the morning if he is going there too ?-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Post actions -->
                            <!--                <div class="post-actions">-->
                            <!--                    <div class="like-wrapper">-->
                            <!--                        <a href="javascript:void(0);" class="like-button">-->
                            <!--                            <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                            <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                            <span class="like-overlay"></span>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-share">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                            <i data-feather="link-2"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-comment">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab">-->
                            <!--                            <i data-feather="message-circle"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p><a href="#">Daniel</a> and <a href="#">Elise</a></p>-->
                            <!--                    <p>liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>2</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>0</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>2</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- /Main wrap -->

                                    <!-- Post #6 comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments (<small>2</small>)</h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body has-slimscroll">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Elise Walker</a>-->
                            <!--                        <span class="time">2 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Jenna Davis</a>-->
                            <!--                                <span class="time">2 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>-->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>0</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                            <!--            </div>-->
                                        <!-- /Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Post #6 comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- /timeline POST #5 -->
                            <!-- Timeline post 6 -->
                            <!-- html/partials/pages/profile/posts/timeline-post6.html -->
                            <!-- Timeline POST #6 -->
                            <!--<div class="profile-post is-simple">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                                            <!-- User image -->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Stella Bergmann shared a status on your feed</a>-->
                            <!--                        <span class="time">September 12 2018, 05:49pm</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>Are we going to see a movie tonight ? From what i can tell, that's what you said last week.-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Post actions -->
                            <!--                <div class="post-actions">-->
                            <!--                    <div class="like-wrapper">-->
                            <!--                        <a href="javascript:void(0);" class="like-button">-->
                            <!--                            <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                            <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                            <span class="like-overlay"></span>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-share">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                            <i data-feather="link-2"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->

                            <!--                    <div class="fab-wrapper is-comment">-->
                            <!--                        <a href="javascript:void(0);" class="small-fab">-->
                            <!--                            <i data-feather="message-circle"></i>-->
                            <!--                        </a>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p><a href="#">Daniel</a> and <a href="#">Elise</a></p>-->
                            <!--                    <p>liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>2</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>0</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>2</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- /Main wrap -->

                                    <!-- Post #6 comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments (<small>2</small>)</h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment has-slimscroll">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Jenna Davis</a>-->
                            <!--                        <span class="time">sep 12</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>1</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Stella Bergmann</a>-->
                            <!--                                <span class="time">sep 12</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>-->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>0</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                            <!--            </div>-->
                                        <!-- /Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Post #6 comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- /timeline POST #6 -->
                            <!-- Timeline post 7 -->
                            <!-- html/partials/pages/profile/posts/timeline-post7.html -->
                            <!-- Timeline POST #7 -->
                            <!--<div class="profile-post">-->
                                <!-- Timeline -->
                            <!--    <div class="time is-hidden-mobile">-->
                            <!--        <div class="img-container">-->
                            <!--            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- Post -->
                            <!--    <div class="card is-post">-->
                                    <!-- Main wrap -->
                            <!--        <div class="content-wrap">-->
                                        <!-- Header -->
                            <!--            <div class="card-heading">-->
                            <!--                <div class="user-block">-->
                            <!--                    <div class="image">-->
                            <!--                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                    </div>-->
                            <!--                    <div class="user-info">-->
                            <!--                        <a href="#">Jenna Davis</a>-->
                            <!--                        <span class="time">September 26 2018, 11:18am</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- Right side dropdown -->
                            <!--                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                    <div>-->
                            <!--                        <div class="button">-->
                            <!--                            <i data-feather="more-vertical"></i>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="dropdown-menu" role="menu">-->
                            <!--                        <div class="dropdown-content">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bookmark"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Bookmark</h3>-->
                            <!--                                        <small>Add this post to your bookmarks.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <a class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="bell"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Notify me</h3>-->
                            <!--                                        <small>Send me the updates.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                            <hr class="dropdown-divider">-->
                            <!--                            <a href="#" class="dropdown-item">-->
                            <!--                                <div class="media">-->
                            <!--                                    <i data-feather="flag"></i>-->
                            <!--                                    <div class="media-content">-->
                            <!--                                        <h3>Flag</h3>-->
                            <!--                                        <small>In case of inappropriate content.</small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- Header -->

                                        <!-- Post body -->
                            <!--            <div class="card-body">-->
                                            <!-- Post body text -->
                            <!--                <div class="post-text">-->
                            <!--                    <p>Hello everyone! Today iam posting a review of the latest shoe trends. I tried for you more than 30 pairs of shoes. I had some crushes and some deceptions, However, it was a great experience i would like to share with you.-->
                            <!--                    <p>-->
                            <!--                </div>-->
                                            <!-- Featured image -->
                            <!--                <div class="post-image">-->
                                                <!-- CSS triple wrap -->
                            <!--                    <div class="triple-grid">-->
                            <!--                        <a data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/16.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/16.jpg">-->
                            <!--                            <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/16.jpg" alt="">-->
                            <!--                        </a>-->
                            <!--                        <a class="is-half" data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/14.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/14.jpg">-->
                            <!--                            <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/14.jpg" alt="">-->
                            <!--                        </a>-->
                            <!--                        <a class="is-half" data-fancybox="profile-post4" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/15.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/15.jpg">-->
                            <!--                            <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/15.jpg" alt="">-->
                            <!--                        </a>-->
                                                    <!-- Post actions -->
                            <!--                        <div class="like-wrapper">-->
                            <!--                            <a href="javascript:void(0);" class="like-button">-->
                            <!--                                <i class="mdi mdi-heart not-liked bouncy"></i>-->
                            <!--                                <i class="mdi mdi-heart is-liked bouncy"></i>-->
                            <!--                                <span class="like-overlay"></span>-->
                            <!--                            </a>-->
                            <!--                        </div>-->

                            <!--                        <div class="fab-wrapper is-share">-->
                            <!--                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">-->
                            <!--                                <i data-feather="link-2"></i>-->
                            <!--                            </a>-->
                            <!--                        </div>-->

                            <!--                        <div class="fab-wrapper is-comment">-->
                            <!--                            <a href="javascript:void(0);" class="small-fab">-->
                            <!--                                <i data-feather="message-circle"></i>-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                            <!--            <div class="card-footer">-->
                                            <!-- Followers -->
                            <!--                <div class="likers-group">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">-->
                            <!--                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">-->
                            <!--                </div>-->
                            <!--                <div class="likers-text">-->
                            <!--                    <p>-->
                            <!--                        <a href="#">Mike</a>,-->
                            <!--                        <a href="#">Rolf</a>-->
                            <!--                    </p>-->
                            <!--                    <p>and 31 more liked this</p>-->
                            <!--                </div>-->
                                            <!-- Post statistics -->
                            <!--                <div class="social-count">-->
                            <!--                    <div class="likes-count">-->
                            <!--                        <i data-feather="heart"></i>-->
                            <!--                        <span>33</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="shares-count">-->
                            <!--                        <i data-feather="link-2"></i>-->
                            <!--                        <span>3</span>-->
                            <!--                    </div>-->
                            <!--                    <div class="comments-count">-->
                            <!--                        <i data-feather="message-circle"></i>-->
                            <!--                        <span>8</span>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Post footer -->
                            <!--        </div>-->
                                    <!-- Main wrap -->

                                    <!-- Comments -->
                            <!--        <div class="comments-wrap is-hidden">-->
                                        <!-- Header -->
                            <!--            <div class="comments-heading">-->
                            <!--                <h4>Comments-->
                            <!--                    <small>(8)</small>-->
                            <!--                </h4>-->
                            <!--                <div class="close-comments">-->
                            <!--                    <i data-feather="x"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Header -->

                                        <!-- Comments body -->
                            <!--            <div class="comments-body has-slimscroll">-->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="4" alt=""> data-user-popover="2" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Stella Bergmann</a>-->
                            <!--                        <span class="time">17 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>0</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="4" alt=""> data-user-popover="0" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Jenna Davis</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>4</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt=""> data-user-popover="4" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">David Kim</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>1</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="4" alt=""> data-user-popover="7" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Milly Augustine</a>-->
                            <!--                                <span class="time">17 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>1</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="4" alt=""> data-user-popover="3" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Daniel Wellington</a>-->
                            <!--                        <span class="time">17 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>-->
                                                    <!-- Comment actions -->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>6</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt=""> data-user-popover="4" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">David Kim</a>-->
                            <!--                        <span class="time">18 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                            et dolore magna aliqua.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>5</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                                                    <!-- Nested Comment -->
                            <!--                        <div class="media is-comment">-->
                                                        <!-- User image -->
                            <!--                            <div class="media-left">-->
                            <!--                                <div class="image">-->
                            <!--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="4" alt=""> data-user-popover="2" alt="">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Content -->
                            <!--                            <div class="media-content">-->
                            <!--                                <a href="#">Stella Bergmann</a>-->
                            <!--                                <span class="time">18 days ago</span>-->
                            <!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore-->
                            <!--                                    et dolore magna aliqua.</p>-->
                                                            <!-- Comment actions -->
                            <!--                                <div class="controls">-->
                            <!--                                    <div class="like-count">-->
                            <!--                                        <i data-feather="thumbs-up"></i>-->
                            <!--                                        <span>7</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="reply">-->
                            <!--                                        <a href="#">Reply</a>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                                                        <!-- Right side dropdown -->
                            <!--                            <div class="media-right">-->
                            <!--                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                                    <div>-->
                            <!--                                        <div class="button">-->
                            <!--                                            <i data-feather="more-vertical"></i>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="dropdown-menu" role="menu">-->
                            <!--                                        <div class="dropdown-content">-->
                            <!--                                            <a class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="x"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Hide</h3>-->
                            <!--                                                        <small>Hide this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                            <div class="dropdown-divider"></div>-->
                            <!--                                            <a href="#" class="dropdown-item">-->
                            <!--                                                <div class="media">-->
                            <!--                                                    <i data-feather="flag"></i>-->
                            <!--                                                    <div class="media-content">-->
                            <!--                                                        <h3>Report</h3>-->
                            <!--                                                        <small>Report this comment.</small>-->
                            <!--                                                    </div>-->
                            <!--                                                </div>-->
                            <!--                                            </a>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                                                    <!-- /Nested Comment -->

                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Comment -->
                            <!--                <div class="media is-comment">-->
                                                <!-- User image -->
                            <!--                    <div class="media-left">-->
                            <!--                        <div class="image">-->
                            <!--                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="4" alt=""> data-user-popover="12" alt="">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Content -->
                            <!--                    <div class="media-content">-->
                            <!--                        <a href="#">Mike Lasalle</a>-->
                            <!--                        <span class="time">20 days ago</span>-->
                            <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>-->
                            <!--                        <div class="controls">-->
                            <!--                            <div class="like-count">-->
                            <!--                                <i data-feather="thumbs-up"></i>-->
                            <!--                                <span>5</span>-->
                            <!--                            </div>-->
                            <!--                            <div class="reply">-->
                            <!--                                <a href="#">Reply</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!-- Right side dropdown -->
                            <!--                    <div class="media-right">-->
                            <!--                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                            <!--                            <div>-->
                            <!--                                <div class="button">-->
                            <!--                                    <i data-feather="more-vertical"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="dropdown-menu" role="menu">-->
                            <!--                                <div class="dropdown-content">-->
                            <!--                                    <a class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="x"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Hide</h3>-->
                            <!--                                                <small>Hide this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                    <div class="dropdown-divider"></div>-->
                            <!--                                    <a href="#" class="dropdown-item">-->
                            <!--                                        <div class="media">-->
                            <!--                                            <i data-feather="flag"></i>-->
                            <!--                                            <div class="media-content">-->
                            <!--                                                <h3>Report</h3>-->
                            <!--                                                <small>Report this comment.</small>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                                            <!-- /Comment -->

                                            <!-- Load More comments -->
                            <!--                <div class="load-more has-text-centered">-->
                            <!--                    <button class="load-more-button">-->
                            <!--                        <i data-feather="more-horizontal"></i>-->
                            <!--                    </button>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments body -->

                                        <!-- Comments footer -->
                            <!--            <div class="card-footer">-->
                            <!--                <div class="media post-comment has-emojis">-->
                                                <!-- Textarea -->
                            <!--                    <div class="media-content">-->
                            <!--                        <div class="field">-->
                            <!--                            <p class="control">-->
                            <!--                                <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                                                    <!-- Additional actions -->
                            <!--                        <div class="actions">-->
                            <!--                            <div class="image is-32x32">-->
                            <!--                                <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">-->
                            <!--                            </div>-->
                            <!--                            <div class="toolbar">-->
                            <!--                                <div class="action is-auto">-->
                            <!--                                    <i data-feather="at-sign"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-emoji">-->
                            <!--                                    <i data-feather="smile"></i>-->
                            <!--                                </div>-->
                            <!--                                <div class="action is-upload">-->
                            <!--                                    <i data-feather="camera"></i>-->
                            <!--                                    <input type="file">-->
                            <!--                                </div>-->
                            <!--                                <a class="button is-solid primary-button raised">Post Comment</a>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                                        <!-- /Comments footer -->
                            <!--        </div>-->
                                    <!-- /Comments -->
                            <!--    </div>-->
                                <!-- /Post -->
                            <!--</div>-->
                            <!-- /timeline POST #7 -->
                        </div>
                    </div>
                </div>
            </div>