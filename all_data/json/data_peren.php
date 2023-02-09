<?php
require_once '../../koneksi.php';

if ($_GET['action'] == "table_data") {

    $columns = array(
        0 => 'id_peren',
        1 => 'n_dok',
        2 => 'tahun',
        3 => 'tentang',
        4 => 'subag',
        5 => 'file',
    );

    $querycount = $mysqli->query("SELECT count(id_peren) as jumlah FROM tb_peren");
    $datacount = $querycount->fetch_array();

    $totalData = $datacount['jumlah'];

    $totalFiltered = $totalData;

    $limit = $_POST['length'];
    $start = $_POST['start'];
    $order = $columns[$_POST['order']['0']['column']];
    $dir = $_POST['order']['0']['dir'];

    if (empty($_POST['search']['value'])) {
        $query = $mysqli->query("SELECT id_peren,n_dok,tahun FROM tb_peren order by $order $dir
                                                      LIMIT $limit
                                                      OFFSET $start");
    } else {
        $search = $_POST['search']['value'];
        $query = $mysqli->query("SELECT id_peren,n_dok,tahun FROM tb_peren WHERE n_dok LIKE '%$search%'
                                                         or tahun LIKE '%$search%'
                                                         order by $order $dir
                                                         LIMIT $limit
                                                         OFFSET $start");

        $querycount = $mysqli->query("SELECT count(id_peren) as jumlah FROM tb_peren WHERE n_dok LIKE '%$search%'
                                                                        or tahun LIKE '%$search%'");
        $datacount = $querycount->fetch_array();
        $totalFiltered = $datacount['jumlah'];
    }

    $data = array();
    if (!empty($query)) {
        $no = $start + 1;
        while ($r = $query->fetch_array()) {
            $nestedData['no'] = $no;
            $nestedData['n_dok'] = $r['n_dok'];
            $nestedData['tahun'] = $r['tahun'];
            $nestedData['aksi'] = "<a href='#' class='btn-warning btn-sm'>Ubah</a>&nbsp; <a href='#' class='btn-danger btn-sm'>Hapus</a>";
            $data[] = $nestedData;
            $no++;
        }
    }

    $json_data = array(
        "draw" => intval($_POST['draw']),
        "recordsTotal" => intval($totalData),
        "recordsFiltered" => intval($totalFiltered),
        "data" => $data,
    );

    echo json_encode($json_data);

}