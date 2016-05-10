<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo activate_menu('member'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>ข้อมูลผู้เช่า</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>member"><i class="fa fa-circle-o"></i> ข้อมูลผู้เช่า</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('electric_rate'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>เรทค่าไฟ</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>electric_rate/edit/1"><i class="fa fa-circle-o"></i> ค่าไฟ</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('water_rate'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>เรทค่าน้ำ</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>water_rate/edit/1"><i class="fa fa-circle-o"></i> ค่าน้ำ</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('room'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>ข้อมูลห้องเช่า</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>room"><i class="fa fa-circle-o"></i> ห้องเช่า</a></li>
            <li class="hidden"><a href="<?= base_url() ?>room_option"><i class="fa fa-circle-o"></i> เพิ่ม Option ภายในห้อง</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('rent_info'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>ข้อมูลการเช่า</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>rent_info"><i class="fa fa-circle-o"></i> การเช่า</a></li>
        </ul>
    </li>
    <li class="<?php echo activate_menu('rental'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>สัญญาเช่า</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>rental"><i class="fa fa-circle-o"></i> สัญญาเช่า</a></li>
        </ul>
    </li>
    <li class="<?php echo activate_menu('period'); ?> treeview hidden">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>กำหนดระยะเวลาเช่า</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>period/edit/1"><i class="fa fa-circle-o"></i> ระยะเวลา</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('pay_limit_date'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>กำหนดช่วงเวลาชำระค่าห้อง</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>pay_limit_date/edit/1"><i class="fa fa-circle-o"></i> ช่วงเวลา</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('deposit'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>กำหนดค่ามัดจำ</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>deposit/edit/1"><i class="fa fa-circle-o"></i> ค่ามัดจำ</a></li>

        </ul>
    </li>
    <li class="<?php echo activate_menu('deposit'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>กำหนดค่า Internet</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>internet/edit/1"><i class="fa fa-circle-o"></i> Internet</a></li>

        </ul>
    </li>

    <li class="<?php echo activate_menu('report'); ?> treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>รายงาน</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="<?= base_url() ?>report/unpaid"><i class="fa fa-circle-o"></i> รายงานสรุปรายรับประจำเดือน</a></li>
            <li class=""><a href="<?= base_url() ?>report/income"><i class="fa fa-circle-o"></i> รายงานการค้างชำระค่าใช้จ่าย</a></li>
        </ul>
    </li>


</ul>