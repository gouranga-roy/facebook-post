<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon" />
    <title>Facebook – log in or sign up</title>

    <link rel="stylesheet" href="{{ Asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ Asset('assets/css/style.css') }}" />
</head>

<body>
    
    <!-- Header -->
    @include(layout.componets.header)

    <!-- FB HOME BODY  -->
    <div class="fb-home-body">
        <!-- Sidebar -->
        @include(layout.componets.sidebar)

        <div class="fb-home-timeline-area">
            <div class="fb-home-timeline">
                <!-- Story Box  -->
                <div class="story-box">
                    <div class="story-box-header">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x1qq9wsj x1qx5ct2 xw4jnvo">
                                        <g fill-rule="evenodd" transform="translate(-446 -350)">
                                            <path d="M457 368.832a.5.5 0 0 0 .883.323l1.12-1.332a.876.876 0 0 1 .679-.323h3.522a2.793 2.793 0 0 0 2.796-2.784v-10.931a2.793 2.793 0 0 0-2.796-2.785h-3.454a2.75 2.75 0 0 0-2.75 2.75v15.082zm-1.5 0a.5.5 0 0 1-.883.323l-1.12-1.332a.876.876 0 0 0-.679-.323h-3.522a2.793 2.793 0 0 1-2.796-2.784v-10.931a2.793 2.793 0 0 1 2.796-2.785h3.454a2.75 2.75 0 0 1 2.75 2.75v15.082z" />
                                        </g>
                                    </svg>
                                    <span>Stories</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo">
                                        <g fill-rule="evenodd" transform="translate(-446 -350)">
                                            <path d="M454.59 355h4.18l-2.4-4h-3.28c-.22 0-.423.008-.624.017L454.59 355zm6.514 0h3.695c-.226-1.031-.65-1.79-1.326-2.489-1.061-1.025-2.248-1.488-4.392-1.511h-.379l2.401 4zm-8.78 0-1.942-3.64c-.73.247-1.315.63-1.868 1.165-.668.69-1.09 1.445-1.315 2.475h5.125zm7.043 7.989a.711.711 0 0 1-.22.202l-4.573 2.671-.05.027a.713.713 0 0 1-1.024-.643v-5.343l.002-.056a.714.714 0 0 1 1.072-.56l4.572 2.67.054.036a.714.714 0 0 1 .167.996zm-12.366-5.99V363.083l.001.03v.112l.005.048h.001c.05 2.02.513 3.176 1.506 4.203 1.102 1.066 2.324 1.525 4.577 1.525h5.99c2.144-.023 3.331-.486 4.392-1.511 1.005-1.04 1.467-2.198 1.517-4.217h.003c.003-.1.005-.1.006-.204l.001-.156V357h-18z" />
                                        </g>
                                    </svg>
                                    <span>Reels</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="story-box-body">
                        <div class="story-area">
                            <div class="story-item auth-user-story" style="background-image: url('./assets/images/user.png')">
                                <div class="auth-story-create">
                                    <button>
                                        <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x14ctfv x1qx5ct2 xw4jnvo">
                                            <g fill-rule="evenodd" transform="translate(-446 -350)">
                                                <g fill-rule="nonzero">
                                                    <path d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z" transform="translate(354.5 159.5)"></path>
                                                    <path d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z" transform="translate(354.5 159.5)"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                    <p>Create Story</p>
                                </div>
                            </div>

                            <div class="story-item" style="
                    background-image: url('https://images.unsplash.com/photo-1630304565761-d6f8d5a0facd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y3V0ZSUyMGJhYnl8ZW58MHx8MHx8&w=1000&q=80');
                  ">
                                <div class="story-user">
                                    <img src="./assets/images/user.png" alt="" />
                                </div>
                                <span>Asraful Haque</span>
                            </div>

                            <div class="story-item" style="
                    background-image: url('https://images.unsplash.com/photo-1630304565761-d6f8d5a0facd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y3V0ZSUyMGJhYnl8ZW58MHx8MHx8&w=1000&q=80');
                  ">
                                <div class="story-user">
                                    <img src="./assets/images/user.png" alt="" />
                                </div>
                                <span>Asraful Haque</span>
                            </div>

                            <div class="story-item" style="
                    background-image: url('https://images.unsplash.com/photo-1630304565761-d6f8d5a0facd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y3V0ZSUyMGJhYnl8ZW58MHx8MHx8&w=1000&q=80');
                  ">
                                <div class="story-user">
                                    <img src="./assets/images/user.png" alt="" />
                                </div>
                                <span>Asraful Haque</span>
                            </div>

                            <div class="story-item" style="
                    background-image: url('https://images.unsplash.com/photo-1630304565761-d6f8d5a0facd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y3V0ZSUyMGJhYnl8ZW58MHx8MHx8&w=1000&q=80');
                  ">
                                <div class="story-user">
                                    <img src="./assets/images/user.png" alt="" />
                                </div>
                                <span>Asraful Haque</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Post Box  -->
                <div class="create-post">
                    <div class="create-post-header">
                        <img src="./assets/images/user.png" alt="" />
                        <button type="button" data-bs-toggle="modal" data-bs-target="#postModal">Whats on your mind ?</button>
                    </div>
                    <div class="divider-0"></div>
                    <div class="create-post-footer">
                        <ul>
                            <li>
                                <div class="post-icon"></div>
                                <span>Live Video</span>
                            </li>
                            <li>
                                <div class="post-icon"></div>
                                Photo/video
                            </li>
                            <li>
                                <div class="post-icon"></div>
                                Feeling/ctivity
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Post Modal -->
                <div class="modal fade" id="postModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 ml-auto" id="staticBackdropLabel">Create Post</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="user-data-box-item d-flex align-items-center justify-content-between gap-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                            <span>User</span>
                                        </div>
                                        <select name="" id="" class="form-select select-profile">
                                            <option value=""><img src="./assets/images/lock.png" alt=""> Select Profile</option>
                                            <option value="">Profile One</option>
                                            <option value="">Profile Two</option>
                                        </select>
                                    </div>
                                    <textarea name="comment_text" class="form-control border-0 shadow-none p-0 mt-3" id="" placeholder="What's on your mind, Gouranga?" rows="5"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary w-100">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- User Post  -->
                <div class="user-post">
                    <div class="user-post-header">
                        <div class="post-info">
                            <img src="./assets/images/user.png" alt="" />
                            <div class="user-details">
                                <a class="author" href="#">Asraful Haque</a>
                                <span>10m
                                    <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1kpxq89 xsmyaan" title="Shared with Public">
                                        <title>Shared with Public</title>
                                        <g fill-rule="evenodd" transform="translate(-448 -544)">
                                            <g>
                                                <path d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434" transform="translate(354 143.5)"></path>
                                                <path d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096" transform="translate(354 143.5)"></path>
                                                <path fill-rule="nonzero" d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z" transform="translate(354 143.5)"></path>
                                            </g>
                                        </g>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="post-menu">
                            <!-- <div class="post-dropdown-menu">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Save post</span>
                      </a>
                    </li>
                    <li class="divid"></li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Embeded</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Who can comment on this post ?</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Edit view history</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Turn off notification</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>turn off translation</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Copy link</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Edit post</span>
                      </a>
                    </li>
                    <li class="divid"></li>
                    <li>
                      <a href="#">
                        <div class="menu-icon"></div>
                        <span>Move trash</span>
                      </a>
                    </li>
                  </ul>
                </div> -->
                            <button>
                                <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo">
                                    <g fill-rule="evenodd" transform="translate(-446 -350)">
                                        <path d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Impedit optio necessitatibus id nemo iste quod?
                            </p>
                        </div>
                    </div>
                    <div class="post-media">
                        <img src="https://embedsocial.com/wp-content/uploads/2020/10/add-links-instagram-posts.jpg" alt="" />
                    </div>
                    <div class="post-comments">
                        <div class="comments-header">
                            <div class="reaction">
                                <div class="reaction-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16">
                                                    <defs>
                                                        <linearGradient id="a" x1="50%" x2="50%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#FF6680" />
                                                            <stop offset="100%" stop-color="#E61739" />
                                                        </linearGradient>
                                                        <filter id="c" width="118.8%" height="118.8%" x="-9.4%" y="-9.4%" filterUnits="objectBoundingBox">
                                                            <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="1" />
                                                            <feOffset dy="-1" in="shadowBlurInner1" result="shadowOffsetInner1" />
                                                            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1" />
                                                            <feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0" />
                                                        </filter>
                                                        <path id="b" d="M8 0a8 8 0 100 16A8 8 0 008 0z" />
                                                    </defs>
                                                    <g fill="none">
                                                        <use fill="url(#a)" xlink:href="#b" />
                                                        <use fill="black" filter="url(#c)" xlink:href="#b" />
                                                        <path fill="white" d="M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16">
                                                    <defs>
                                                        <linearGradient id="a" x1="50%" x2="50%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#18AFFF" />
                                                            <stop offset="100%" stop-color="#0062DF" />
                                                        </linearGradient>
                                                        <filter id="c" width="118.8%" height="118.8%" x="-9.4%" y="-9.4%" filterUnits="objectBoundingBox">
                                                            <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="1" />
                                                            <feOffset dy="-1" in="shadowBlurInner1" result="shadowOffsetInner1" />
                                                            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1" />
                                                            <feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0" />
                                                        </filter>
                                                        <path id="b" d="M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z" />
                                                    </defs>
                                                    <g fill="none">
                                                        <use fill="url(#a)" xlink:href="#b" />
                                                        <use fill="black" filter="url(#c)" xlink:href="#b" />
                                                        <path fill="white" d="M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">Kajal Datta, Sufia Sepu and 550 others</a>
                            </div>
                            <div class="counts">
                                <a href="#">95 Comments</a>
                            </div>
                        </div>
                        <div class="divider-0"></div>
                        <div class="comments-menu">
                            <ul>
                                <li>
                                    <span class="comment-icon"></span>
                                    <span>Like</span>
                                </li>
                                <li data-bs-toggle="modal" data-bs-target="#commentModal">
                                    <span class="comment-icon"></span>
                                    <span>Comment</span>
                                </li>

                                <li>
                                    <span class="comment-icon"></span>
                                    <span>Share</span>
                                </li>
                            </ul>
                        </div>
                        <div class="divider-0"></div>
                        <div class="comments-area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment Modal -->
    <div class="modal fade" id="commentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 ml-auto" id="staticBackdropLabel">Our Academy's Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- form should wrap only body+footer -->
                <form action="">
                    <div class="modal-body">
                        <div class="scrollable-body">
                            <div class="user-data-box-item d-flex align-items-center justify-content-between gap-2 mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                    <span>User</span>
                                </div>
                            </div>
                            <p>Below is a static modal example (meaning its position and display have been overridden)...</p>
                            <img class="w-100 rounded-4 mb-4" style="max-height: 400px; object-fit:cover;" src="https://scontent.fdac157-1.fna.fbcdn.net/v/t39.30808-6/515278101_1188600709961212_7427247453596932886_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=j6KCFTCKQ4oQ7kNvwHVOX8P&_nc_oc=AdkR6HlOJk1GHREkI7qQHNBPeD5Xg4RsO5KcoV87DpgaohDxaVgweCFGKzmmpTyTgxM&_nc_zt=23&_nc_ht=scontent.fdac157-1.fna&_nc_gid=4sb1gNPoLzn3CE6XfGm_Ig&oh=00_Afbfu1mbZR73v6WQo881zLlly67g0aT-5hRmdYMI2kRTvA&oe=68C98852" alt="">
                            <h4>Comments</h4>
                            <div class="comment_list mb-2 p-3 rounded-4">
                                <div class="user-data-box-item">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                        <span>User</span>
                                    </div>
                                    <p class="ps-4 ms-4 fs-sm">Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="user-data-box-item">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                        <span>User</span>
                                    </div>
                                    <p class="ps-4 ms-4 fs-sm">Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="user-data-box-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                        <span>User</span>
                                    </div>
                                    <p class="ps-4 ms-4 fs-sm">Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="user-data-box-item">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                        <span>User</span>
                                    </div>
                                    <p class="ps-4 ms-4 fs-sm">Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="user-data-box-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://placehold.jp/30/60x60.png?text=User" class="rounded-circle" style="width:40px;" alt="">
                                        <span>User</span>
                                    </div>
                                    <p class="ps-4 ms-4 fs-sm">Lorem ipsum dolor sit amet...</p>
                                </div>
                            </div>
                        </div>

                        <textarea name="comment_text" class="form-control shadow-none mt-3" placeholder="Comment As Gouranga Roy" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-100">Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ Asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ Asset('assets/js/main.js') }}"></script>
</body>

</html>