@if (session('error'))
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="card bg-danger w-100">
          <div class="card-header">
            <h3 class="card-title">Gagal</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            {{ session('error') }}
          </div>
          <!-- /.card-body -->
      </div>
    </div>
  </div>
</section>
@endif