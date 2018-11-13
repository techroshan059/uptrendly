@extends('layouts.backendapp')
@section('admin-content')

    <div class="col s12 m6 l3">
        <div class="card ui-app__page-content">
            <div class="card-content ui-app__page-content__analytics">

                <div class="card-body">
                    <div class="ui-app__page-content__analytics--data">
                        <div class="right"><i class="material-icons ">supervised_user_circle</i>
                        </div>
                        <h3 class="headline">678450</h3>
                        <div class="text-muted">Visitors online</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col s12 m6 l3">
        <div class="card ui-app__page-content">
            <div class="card-content ui-app__page-content__analytics">

                <div class="card-body">
                    <div class="ui-app__page-content__analytics--data">
                        <div class="right"><i class="material-icons ">monetization_on</i>
                        </div>
                        <h3 class="headline">5698</h3>
                        <div class="text-muted">Total Sales</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col s12 m6 l3">
        <div class="card ui-app__page-content">
            <div class="card-content ui-app__page-content__analytics ">

                <div class="card-body">
                    <div class="ui-app__page-content__analytics--data">
                        <div class="right"><i class="material-icons ">library_books</i>
                        </div>
                        <h3 class="headline">560</h3>
                        <div class="text-muted">Total Projects</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col s12 m6 l3">
        <div class="card ui-app__page-content">
            <div class="card-content ui-app__page-content__analytics">

                <div class="card-body">
                    <div class="ui-app__page-content__analytics--data">
                        <div class="right"><i class="material-icons ">attach_money</i>
                        </div>
                        <h3 class="headline">56980</h3>
                        <div class="text-muted">Today Income</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Analytics Header -->

    <!-- sales chart -->
    <div class="col s12">

        <div class="card ui-app__page-content">
            <div class="card-content">
                <!-- title -->
                <div class="card-title headline">Analytics report</div>

                <div class="card-body">
                    <div style="min-height: 375px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="dashboard-analytics-report-chart" style="display: block; height: 375px; width: 613px;" width="1226" height="750" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- sales chart -->

    <!-- Report Table -->
    <div class="col s12 m12 l6">

        <div class="card ui-app__page-content">
            <div class="card-content">
                <!-- title -->
                <div class="card-title headline">Users report</div>

                <div class="card-body">
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th><i class="material-icons">people</i></th>
                            <th>User</th>
                            <th>Items</th>
                            <th>Activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="../assets/images/user1.jpg" alt="user profile picture" class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                            <td>
                                <div>Audrey Gill</div>
                                <div class="text-muted">Registered: May 23, 2018</div>
                            </td>

                            <td>03</td>
                            <td>
                                <div class="text-muted">Last login</div>
                                <div>10 minutes ago</div>
                            </td>
                        </tr>

                        <tr>
                            <td><img src="../assets/images/user2.jpg" alt="user profile picture" class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                            <td>
                                <div>Bernadette Arnold</div>
                                <div class="text-muted">Registered: June 22, 2018</div>
                            </td>

                            <td>01</td>
                            <td>
                                <div class="text-muted">Last login</div>
                                <div>12 hours ago</div>
                            </td>
                        </tr>


                        <tr>
                            <td><img src="../assets/images/user3.jpg" alt="user profile picture" class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                            <td>
                                <div>Chloe Claire</div>
                                <div class="text-muted">Registered: May 22, 2018</div>
                            </td>

                            <td>07</td>
                            <td>
                                <div class="text-muted">Last login</div>
                                <div>Just Now</div>
                            </td>
                        </tr>

                        <tr>
                            <td><img src="../assets/images/user4.jpg" alt="user profile picture" class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                            <td>
                                <div>Dorothy Elizabeth</div>
                                <div class="text-muted">Registered: June 20, 2018</div>
                            </td>

                            <td>09</td>
                            <td>
                                <div class="text-muted">Last login</div>
                                <div>30 min ago</div>
                            </td>
                        </tr>

                        <tr>
                            <td><img src="../assets/images/user5.jpg" alt="user profile picture" class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                            <td>
                                <div>Carolyn Emma</div>
                                <div class="text-muted">Registered: June 12, 2018</div>
                            </td>

                            <td>06</td>
                            <td>
                                <div class="text-muted">Last login</div>
                                <div>5 hours ago</div>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
    <!-- Report Table -->

    <!-- Notification report -->

    <div class="col s12 m12 l6">

        <div class="card ui-app__page-content">
            <div class="card-content">
                <!-- title -->
                <div class="card-title headline">Recent notifications</div>

                <div class="card-body">
                    <ul class="collection" style="border:0px">
                        <li class="collection-item avatar"> <img src="../assets/images/user1.jpg" alt="user profile picture" class="circle"> <span class="title">Brunch this weekend?</span>
                            <p>Ali Connors <span class="body-1">— I'll be in your neighborhood doing errands this weekend.</span></p>
                        </li>
                        <li class="collection-item avatar"> <img src="../assets/images/user2.jpg" alt="user profile picture" class="circle"> <span class="title">Oui oui</span>
                            <p>Sandra Adams <span class="body-1">— Do you have Paris recommendations? Have you ever been?</span></p>
                        </li>
                        <li class="collection-item avatar"> <img src="../assets/images/user3.jpg" alt="user profile picture" class="circle"> <span class="title">Birthday gift</span>
                            <p>Trevor Hansen <span class="body-1">— Have any ideas about what we should get Heidi for her birthday?</span></p>
                        </li>
                        <li class="collection-item avatar"> <img src="../assets/images/user4.jpg" alt="user profile picture" class="circle"> <span class="title">Recipe to try</span>
                            <p>Britta Holt <span class="body-1">— We should eat this: Grate, Squash, Corn, and tomatillo Tacos.</span></p>
                        </li>

                    </ul>
                </div>

            </div>
        </div>

    </div>
    <!-- Notification report -->
@stop()