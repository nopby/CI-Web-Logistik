<script>
    function select_data($id,$menu){
        $('#upmenuid').val($id);
        $('#upmenu').val($menu);
    }
    function select_data1($id,$menu_id,$title,$url,$icon,$is_active){
        $('#upsubmenuid').val($id);
        $('#upsubmenu_id').val($menu_id);
        $('#upsubmenutitle').val($title);
        $('#upsubmenuurl').val($url);
        $('#upsubmenuicon').val($icon);
        $('#upsubmenuactive').val($is_active);
        if(document.getElementById('upsubmenuactive').checked){
            $('#upsubmenuactive').val(1);
        }else{
            $('#upsubmenuactive').val(0);
        }
    }
</script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4">Menu <?= $title ?></h1>

                    <!-- menu -->
                    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">+ Menu</a>

                    <div class="card" style="width:24rem">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                <?php foreach($menu as $i): ?>
                                <tr>
                                    <th scope="row"><?= $count; $count++ ?></th>
                                        <td><?= $i['menu'] ?></td>
                                        <td>
                                            <a href="#" onclick="select_data('<?= $i['id'] ?>','<?= $i['menu'] ?>')"class="badge badge-success editbtn" data-toggle="modal" data-target="#updateMenuModal" onclick="">Edit</a>
                                            <a href="<?= base_url('menu/delete/'.$i['id'])?>" class="badge badge-danger">Delete</a>
                                        </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="col-lg-7">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4">Sub Menu <?= $title ?></h1>
                    
                    <!-- sub menu -->
                    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">+ Sub Menu</a>

                    <div class="card mb-4">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                <?php foreach($subMenu as $i): ?>
                                <tr>
                                    <th scope="row"><?= $count; $count++ ?></th>
                                        <td><?= $i['title'] ?></td>
                                        <td><?= $i['menu'] ?></td>
                                        <td><?= $i['url'] ?></td>
                                        <td><?= $i['icon'] ?></td>
                                        <td><?= $i['is_active'] ?></td>
                                        <td>
                                            <a href="#" onclick="select_data1('<?= $i['id'] ?>','<?= $i['menu_id']?>','<?= $i['title'] ?>','<?= $i['url'] ?>','<?= $i['icon'] ?>',
                                            '<?= $i['is_active']?>') " class="badge badge-success" data-toggle="modal" data-target="#updateSubMenuModal">Edit</a>
                                            <a href="<?= base_url('menu/deleteSubMenu/'.$i['id'])?>" class="badge badge-danger">Delete</a>
                                        </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if(validation_errors()):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif; ?>
                <?= $this->session->flashdata('subflash');?>
                <?= $this->session->flashdata('flash');?>
            </div>

            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Button trigger modal -->

    <!-- Menu Modal -->
    <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newMenuModal">Add Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu/addMenu') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="menu" placeholder="Menu Name" name="menu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
    </div>

    <!-- Edit Menu Modal -->
    <div class="modal fade" id="updateMenuModal" tabindex="-1" role="dialog" aria-labelledby="updateMenuModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateMenuModal">Edit Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu/updateMenu/') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" id="upmenuid" name="upmenuid" value="">
                    <input type="text" class="form-control" id="upmenu" placeholder="Menu Name" name="upmenu" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
    </div>

    <!-- Sub Menu Modal -->
    <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModal">Add Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/addSubMenu') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" id="title" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control mb-3">
                            <option value="">Select Menu</option>
                            <?php foreach($menu as $i): ?>
                            <option value="<?= $i['id'] ?>"><?= $i['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" id="url" placeholder="Url" name="url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" id="icon" placeholder="Icon" name="icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input mb-3" id="is_active" name="is_active" checked>
                            <label for="is_active" class="form-check-label">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            
            </div>
        </div>
    </div>

    <!-- Edit Sub Menu Modal -->
    <div class="modal fade" id="updateSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="updateSubMenuModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateSubMenuModal">Edit Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/updateSubMenu') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="upsubmenuid" name="upsubmenuid" value="">
                        <input type="text" class="form-control mb-3" id="upsubmenutitle" placeholder="Title" name="upsubmenutitle" value="">
                    </div>
                    <div class="form-group">
                        <select name="upsubmenu_id" id="upsubmenu_id" class="form-control mb-3">
                            <option value="">Select Menu</option>
                            <?php foreach($menu as $i): ?>
                            <option value="<?= $i['id'] ?>"><?= $i['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" id="upsubmenuurl" placeholder="Url" name="upsubmenuurl" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" id="upsubmenuicon" placeholder="Icon" name="upsubmenuicon" value="">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input mb-3" value="1" id="upsubmenuactive" name="upsubmenuactive" checked>

                            <label for="is_active" class="form-check-label">
                                Active?
                            </label>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            
            </div>
        </div>
    </div>
      