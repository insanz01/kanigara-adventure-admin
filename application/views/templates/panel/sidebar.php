<style>
  .bg-custom-side {
    background-color: #594545;
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-custom-side">
  <!-- Brand Logo -->
  <a href="<?= base_url('profile') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/bahan/sipetruk_Transparent.png" alt="Panel Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Panel Console</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar bg-custom-side">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/image/profile/user.png" class="objectPicture" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url() ?>" class="d-block">
          <?php if($this->session->userdata("SESS_KANIGARA_ROLEID") == 1): ?>
            <?= 'Administrator' ?> 
          <?php else: ?>
            <?= 'Cabang' ?>
          <?php endif; ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- tambah class menu-open untuk secara otomatis membuka -->
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              DASHBOARD
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('transaksi/pinjam') ?>" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
            <p>PEMINJAMAN</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('transaksi/kembali') ?>" class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>BARANG KEMBALI</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                MASTER DATA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if($this->session->userdata("SESS_KANIGARA_ROLEID") == 1): ?>
                <li class="nav-item">
                  <a href="<?= base_url('produk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon ml-3"></i>
                    <p>Produk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('cabang') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon ml-3"></i>
                    <p>Cabang</p>
                  </a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?= base_url('katalog') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Katalog</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if($this->session->userdata("SESS_KANIGARA_ROLEID") == 1): ?>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  LAPORAN
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('laporan/produk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon ml-3"></i>
                    <p>Produk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('laporan/cabang') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon ml-3"></i>
                    <p>Cabang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('laporan/katalog') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon ml-3"></i>
                    <p>Transaksi</p>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="<?= base_url("print") ?>" class="nav-link" target="_blank">
                <i class="nav-icon fas fa-print"></i>
                <p>
                  PRINT LAPORAN
                  <!-- <span class="badge badge-info right">2</span> -->
                </p>
              </a>
            </li>
          <?php endif; ?>
            
        <?php if($this->session->userdata('SESS_SPPD_ROLEID') == 2): ?>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PENGAJUAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('na/bpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                LAPORAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('na/bpd/laporan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('na/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li> -->
        <?php else: ?>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Pegawai</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pengajuan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/spt') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/sppd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPPD</p>
                </a>
              </li>
            </ul>
          </li>
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('laporan/spt') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/sppd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/bpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li> -->
        <?php endif; ?>

        <!-- <li class="nav-item">
          <a href="<?= base_url('downloads/document/SPPD 2022.docx') ?>" download class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>Download Template</p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a href="<?= base_url('admin/laporan') ?>" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Print Laporan
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
            <a href="<?= base_url('panel/pengaturan') ?>" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li> -->

        <li class="nav-item my-4">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>