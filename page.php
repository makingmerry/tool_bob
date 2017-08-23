<?php
  $template = 'page';
  $uid = 'default';
  $title = 'Default';
  include 'snippets/header.php';
  include 'snippets/pre-loader.php';
?>

<!-- structure -->
<div class="
  pos-relative z-1
  d-flex flx-dir-row flx-wp-wrap flx-ac-s-between
  h-100vh-min">
  <!-- top -->
  <div class="
    pos-relative z-1
    g12-12">
    <!-- view mast -->
    <div class="
      pos-relative z-3
      m-bottom-4">
      <?php include 'snippets/mast.php'; ?>
    </div>

    <!-- view loader -->
    <div class="pos-relative z-2">
      <?php include 'snippets/loader.php'; ?>
    </div>

    <!-- view -->
    <div class="pos-relative z-1" id="mainframe-wp">
      <main class="mainframe" data-template="<?php echo $template; ?>" data-uid="<?php echo $uid; ?>">
        <h1>
          <?php echo $title; ?>
        </h1>
        <a href="/index.php">
          go to index page
        </a>
      </main>
    </div>
  </div>

  <!-- bottom -->
  <div class="
    pos-relative z-2
    g12-12">
    <!-- view base -->
    <div class="m-top-4">
      <?php include 'snippets/base.php'; ?>
    </div>
  </div>
</div>

<?php include 'snippets/footer.php'; ?>