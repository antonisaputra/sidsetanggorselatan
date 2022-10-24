<?php

function viewAdmin($folder, $file, $data)
{
    $ci = get_instance();

    $ci->load->view('admin/tamplates/header', $data);
    $ci->load->view('admin/tamplates/sidebar', $data);
    $ci->load->view('admin/' . $folder . '/' . $file, $data);
    $ci->load->view('admin/tamplates/footer', $data);
}

function active_menu($dataActive)
{
    $ci = get_instance();
    $cekurl = $ci->uri->segment(1);

    if ($cekurl != $dataActive) {
        return "collapsed";
    }
}

function active_dusun_rt()
{
    $ci = get_instance();
    $cekurl = $ci->uri->segment(1);

    if ($cekurl != 'Dusun' && $cekurl != 'Rt') {
        return "collapsed";
    }
}

function viewUser($folder, $file, $data)
{
    $ci = get_instance();

    $ci->load->view('user/tamplates/header', $data);
    $ci->load->view('user/' . $folder . '/' . $file, $data);
    $ci->load->view('user/tamplates/footer', $data);
}
