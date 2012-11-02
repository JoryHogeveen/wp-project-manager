<?php

/**
 * ------------------------------------------------
 * Project URL Helpers
 * ------------------------------------------------
 */
function cpm_url_projects() {
    return sprintf( '%s?page=cpm_projects', admin_url( 'admin.php' ) );
}

function cpm_url_project_new() {
    $url = sprintf( '%s?page=cpm_projects&tab=project&action=new', admin_url( 'admin.php' ) );

    return apply_filters( 'cpm_url_project_new', $url );
}

function cpm_url_project_details( $project_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=project&action=single&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_project_details', $url );
}

function cpm_url_project_edit( $project_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=project&action=edit&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_project_edit', $url );
}

/**
 * ------------------------------------------------
 * Task/Tasklist URL Helpers
 * ------------------------------------------------
 */
function cpm_url_new_tasklist( $project_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=new&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_new_tasklislt', $url );
}

function cpm_url_single_tasklist( $project_id, $list_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=single&pid=%d&tl_id=%d', admin_url( 'admin.php' ), $project_id, $list_id );

    return apply_filters( 'cpm_url_single_tasklislt', $url );
}

function cpm_url_edit_tasklist( $project_id, $list_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=edit&pid=%d&tl_id=%d', admin_url( 'admin.php' ), $project_id, $list_id );

    return apply_filters( 'cpm_url_edit_tasklislt', $url );
}

function cpm_url_add_task( $project_id, $list_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=task_new&pid=%d&tl_id=%d', admin_url( 'admin.php' ), $project_id, $list_id );

    return apply_filters( 'cpm_url_add_task', $url );
}

function cpm_url_single_task( $project_id, $list_id, $task_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=task_single&pid=%d&tl_id=%d&task_id=%d', admin_url( 'admin.php' ), $project_id, $list_id, $task_id );

    return apply_filters( 'cpm_url_single_task', $url );
}

function cpm_url_edit_task( $project_id, $list_id, $task_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=task&action=task_edit&pid=%d&tl_id=%d&task_id=%d', admin_url( 'admin.php' ), $project_id, $list_id, $task_id );

    return apply_filters( 'cpm_url_edit_task', $url );
}

/**
 * ------------------------------------------------
 * Message URL Helpers
 * ------------------------------------------------
 */
function cpm_url_single_message( $project_id, $message_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=message&action=single&pid=%d&mid=%d', admin_url( 'admin.php' ), $project_id, $message_id );

    return apply_filters( 'cpm_url_single_message', $url );
}

function cpm_url_message_index( $project_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=message&action=index&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_message_index', $url );
}

function cpm_url_new_message( $project_id ) {
    $url = sprintf( '%s?page=cpm_messages&tab=message&action=new&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_new_message', $url );
}

function cpm_msg_edit_url( $message_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=message&action=edit&mid=%d', admin_url( 'admin.php' ), $message_id );

    return apply_filters( 'cpm_msg_edit_url', $url );
}

/**
 * ------------------------------------------------
 * Milestone URL Helpers
 * ------------------------------------------------
 */
function cpm_url_new_milestone( $project_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=milestone&action=new&pid=%d', admin_url( 'admin.php' ), $project_id );

    return apply_filters( 'cpm_url_new_milestone', $url );
}

function cpm_url_single_milestone( $project_id, $milestone_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=milestone&action=single&pid=%d&ml_id=%d', admin_url( 'admin.php' ), $project_id, $milestone_id );

    return apply_filters( 'cpm_url_single_milestone', $url );
}

function cpm_url_edit_milestone( $project_id, $milestone_id ) {
    $url = sprintf( '%s?page=cpm_projects&tab=milestone&action=edit&pid=%d&ml_id=%d', admin_url( 'admin.php' ), $project_id, $milestone_id );

    return apply_filters( 'cpm_url_edit_milestone', $url );
}