
<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 28/10/2019
 * Time: 18:45
 */
?>

@extends('layout')
@section('title','Dashboard')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">

        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">people</i>
                        </div>
                        <p class="card-category">Active <br>Members</p>
                        <h3 class="card-title">184</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">peoples</i>
                        </div>
                        <p class="card-category">Upcoming <br>Members</p>
                        <h3 class="card-title">75.521</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">deck</i>
                        </div>
                        <p class="card-category">Total <br>Cells</p>
                        <h3 class="card-title">34,245</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">sports_volleyball</i>
                        </div>
                        <p class="card-category">Last Service<br> Attendance</p>
                        <h3 class="card-title">34,245</h3>
                    </div>
                </div>
            </div>

        </div>
        <h3></h3>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-product">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">table_chart</i>
                        </div>
                        <h4 class="card-title">Monthly Attendance</h4>
                    </div>

                    <div class="card-body">

                        <canvas id="myChart" style="width:100%;"></canvas>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">star_border</i>
                        </div>
                        <h4 class="card-title ">Attendance for last three services</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr><th>
                                        ID
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Action
                                    </th>

                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Dakota Rice
                                    </td>
                                    <td>
                                        Niger
                                    </td>
                                    <td>
                                        Oud-Turnhout
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Minerva Hooper
                                    </td>
                                    <td>
                                        Curaçao
                                    </td>
                                    <td>
                                        Sinaai-Waas
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        Sage Rodriguez
                                    </td>
                                    <td>
                                        Netherlands
                                    </td>
                                    <td>
                                        Baileux
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        Philip Chaney
                                    </td>
                                    <td>
                                        Korea, South
                                    </td>
                                    <td>
                                        Overland Park
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        Doris Greene
                                    </td>
                                    <td>
                                        Malawi
                                    </td>
                                    <td>
                                        Feldkirchen in Kärnten
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        Mason Porter
                                    </td>
                                    <td>
                                        Chile
                                    </td>
                                    <td>
                                        Gloucester
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">person+</i>
                        </div>
                        <h4 class="card-title">First Timer<br><small>Recently Added Members</small></h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr><th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>

                                    <th>
                                        Cell
                                    </th>
                                    <th>
                                        Birthday
                                    </th>

                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>

                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>

                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>

                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>

                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>

                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                            <a href="firsttimer.html" class="btn btn-success btn-xs">View all</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">group+</i>
                        </div>
                        <h4 class="card-title">Attendance<br><small> Attendees and absentees from Last 6 services</small></h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr><th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Cell
                                    </th>
                                    <th>
                                        Birthday
                                    </th>
                                    <th>
                                        Monthy Birthday
                                    </th>
                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>
                                    <td>
                                        pet@gmail.com
                                    </td>
                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>
                                    <td>
                                        May
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>
                                    <td>
                                        pet@gmail.com
                                    </td>
                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>
                                    <td>
                                        May
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>
                                    <td>
                                        pet@gmail.com
                                    </td>
                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>
                                    <td>
                                        May
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>
                                    <td>
                                        pet@gmail.com
                                    </td>
                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>
                                    <td>
                                        May
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Perter Edo
                                    </td>
                                    <td>
                                        090876543323
                                    </td>
                                    <td>
                                        pet@gmail.com
                                    </td>
                                    <td>
                                        Adam's Cell
                                    </td>
                                    <td>
                                        27 march
                                    </td>
                                    <td>
                                        May
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <a href="viewAttendance.html" class="btn btn-success btn-xs">View all</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection