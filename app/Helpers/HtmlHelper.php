<?php


/**
 * Set message
 *
 * @param string $type
 * @param string $label
 * @return string
 */
function setMessage($type, $label = '')
{
    $label = ucfirst(strtolower($label));

    if(strtolower($type)=='create') {
        $msg = $label." has been created successfully";
    } elseif(strtolower($type)=='update') {
        $msg = $label." has been updated successfully";
    } elseif(strtolower($type)=='delete') {
        $msg = $label." has been deleted successfully";
    } elseif(strtolower($type)=='create.error') {
        $msg = "Error in saving ".$label;
    }elseif(strtolower($type)=='update.error') {
        $msg = "Error in updating ".$label;
    } else {
        $msg = '';
    }
    return $msg;
}



/**
 * get status
 *
 * @return array
 */
function getStatus()
{
    return [
        '1' => 'Active',
        '0' => 'Inactive'
    ];
}

/**
 * get status
 *
 * @param int $status_id
 * @return string
 */
function setStatus($status_id = '')
{
    if ($status_id == 0) {
        $status = '<span class="label label-inline label-danger">Inactive</span>';
    } else if($status_id == 1) {
        $status = '<span class="label label-inline label-success">Active</span>';
    } else {
        $status = '';
    }

    return $status;
}


/**
 * Make select box
 *
 * @param array $data
 * @param int $value
 * @return string
 */
function dropDown($name, $classes = [], $id, $data = [], $value = '')
{
    $class = is_array($classes) ? implode(' ', $classes) : '';
    $html = '<select id="'.$id.'" class="'.$class.'" name="'.$name.'">';
    $html .= '<option value="">--Please Select--</option>';
    if (sizeof($data) > 0) {
        foreach ($data as $key => $val) {
            $selected = $value == $key ? 'selected' : '';
            $html .= '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';
        }

    }
    $html .= '</select>';

    return $html;
}

function messageStatus($status_id = 0)
{
    if ($status_id == 0) {
        $status = '<span class="badge badge-info">not yet seen</span>';
    } else if($status_id == 1) {
        $status = '<span class="badge badge-success">seen</span>';
    } else {
        $status = '';
    }

    return $status;
}

