<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 08:10
 */
?>




<ul class="nav">


    <li class="nav-item {{(isset($active) ? ($active =="dashboard")? "active" : "": "")}}">
        <a class="nav-link" href="/">
            <i class="material-icons">dashboard</i>
            <p> Dashboard </p>
        </a>
    </li>


    @if(Session::get('user')[0]["level"] == 1)

        <li class="nav-item {{(isset($active) ? ($active =="verify")? "active" : "": "")}}">
            <a class="nav-link" href="{{route("loadVerification2")}}">
                <i class="material-icons">star</i>
                <p>Sim Registration </p>
            </a>
        </li>
        @endif

        @if(Session::get('user')[0]["level"] == 2 || Session::get('user')[0]["level"] == 3)

        <li class="nav-item {{(isset($active) ? ($active =="verify")? "active" : "": "")}}">
            <a class="nav-link" href="{{route("loadVerification")}}">
                <i class="material-icons">star</i>
                <p> Verification </p>
            </a>
        </li>

            <li class="nav-item {{(isset($active) ? ($active =="logs")? "active" : "": "")}}">
                <a class="nav-link" href="{{route("showLog")}}">
                    <i class="material-icons">folder</i>
                    <p> Verification Logs </p>
                </a>
            </li>
        @endif

        @if(Session::get('user')[0]["level"] == 1 || Session::get('user')[0]["level"] == 2)



            <li class="nav-item {{(isset($active) ? ($active =="co")? "active" : "": "")}}">
                <a class="nav-link" href="{{route("showCreateOrganisation")}}">
                    <i class="material-icons">edit</i>
                    <p> Create Organisation </p>
                </a>
            </li>


    <li class="nav-item {{(isset($active) ? ($active =="alo")? "active" : "": "")}}">
        <a class="nav-link" href="{{route("showAllOrganisations")}}">
            <i class="material-icons">people</i>
            <p> All Organisations </p>
        </a>
    </li>


    <li class="nav-item {{(isset($active) ? ($active =="aco")? "active" : "": "")}}">
        <a class="nav-link" href="{{route("showActiveOrganisations")}}">
            <i class="material-icons">people</i>
            <p> Active Organisations </p>
        </a>
    </li>



    <li class="nav-item {{(isset($active) ? ($active =="iao")? "active" : "": "")}}">
        <a class="nav-link" href="{{route("showInactiveOrganisations")}}">
            <i class="material-icons">list</i>
            <p> Inactive Organisations </p>
        </a>
    </li>
            <li class="nav-item {{(isset($active) ? ($active =="cp")? "active" : "": "")}}">
                <a class="nav-link" href="{{route("changePassword")}}">
                    <i class="material-icons">lock</i>
                    <p> Change Password </p>
                </a>
            </li>
        @endif



    <li class="nav-item" style="background-color:red">
        <a class="nav-link" href="/logout">
            <i class="material-icons">logout</i>
            <p> Logout</p>
        </a>
    </li>
</ul>
