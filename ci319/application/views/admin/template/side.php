  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte24/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image')?>">
        </div>
        <div class="pull-left info">
          <p>Yogiswara</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Admin </li>
        <?php foreach($menus as $list) { ?>
          <li><a href="<?php echo site_url($list['menu_uri']) ?>"><i class="fa fa-circle-o"></i><?php echo $list['menu_nama'] ?> </a></li>
        <?php } ?>
        <li class="header">LABELS</li>
        <li><a href="<?php echo site_url('CkeditorController') ?>"><i class="fa fa-circle-o text-red"></i> <span>Ckeditor</span></a></li>
        <li><a href="<?php echo site_url('book') ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Buku</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


