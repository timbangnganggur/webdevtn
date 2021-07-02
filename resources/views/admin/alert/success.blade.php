@if (session('success'))
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 w-100">
        <div class="card bg-success">
            <div class="card-header">
            <h3 class="card-title">Berhasil</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            {{ session('success') }}
            </div>
            <!-- /.card-body -->
        </div>
      </div>
    </div>
</section>
@endif