<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if ($this->session->flashdata('pesan')) : ?>
            Swal.fire({
                title: "<?php echo $this->session->flashdata('pesan'); ?>",
                icon: "<?php echo $this->session->flashdata('type'); ?>",
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    });

    function deleteConfirmation(url) {
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Menghapus data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = url;
            }
        });
    }
</script>