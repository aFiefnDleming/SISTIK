<?php
    defined('BASEPATH') or exit("No direct script!");
?>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.material.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/circle-progress/circle-progress.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lihat').DataTable();
         $('#circle').circleProgress({
    value: <?= $final_nil ?>,
    size: 230,
    startAngle:29.85,
    fill: {
      color: "<?= $isi_kartu ?>"
    }
  });
    });
</script>
