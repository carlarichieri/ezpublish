<?php 
$schema = 
array (
  'ezapprove_items' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'workflow_process_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'collaboration_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezbasket' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'session_id' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'productcollection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezbasket_session_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'session_id',
        ),
      ),
    ),
  ),
  'ezbinaryfile' => 
  array (
    'fields' => 
    array (
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'original_filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'mime_type' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezcollab_group' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'parent_group_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'depth' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'path_string' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'is_open' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'priority' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezcollab_group_path' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'path_string',
        ),
      ),
      'ezcollab_group_depth' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'depth',
        ),
      ),
    ),
  ),
  'ezcollab_item' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'type_identifier' => 
      array (
        'length' => '40',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'data_text1' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text2' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text3' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_int1' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int2' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int3' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_float1' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'data_float2' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'data_float3' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcollab_item_group_link' => 
  array (
    'fields' => 
    array (
      'collaboration_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'group_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_active' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'last_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'collaboration_id',
          1 => 'group_id',
          2 => 'user_id',
        ),
      ),
    ),
  ),
  'ezcollab_item_message_link' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'collaboration_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'participant_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'message_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'message_type' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcollab_item_participant_link' => 
  array (
    'fields' => 
    array (
      'collaboration_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'participant_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'participant_type' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'participant_role' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'is_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_active' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'last_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'collaboration_id',
          1 => 'participant_id',
        ),
      ),
    ),
  ),
  'ezcollab_item_status' => 
  array (
    'fields' => 
    array (
      'collaboration_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_active' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'last_read' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'collaboration_id',
          1 => 'user_id',
        ),
      ),
    ),
  ),
  'ezcollab_notification_rule' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'collab_identifier' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcollab_profile' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'main_group' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text1' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcollab_simple_message' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'message_type' => 
      array (
        'length' => '40',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text1' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text2' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text3' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_int1' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int2' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int3' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_float1' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'data_float2' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'data_float3' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcontent_translation' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'locale' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcontentbrowsebookmark' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezcontentbrowsebookmark_user' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
  ),
  'ezcontentbrowserecent' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezcontentbrowserecent_user' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
  ),
  'ezcontentclass' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'identifier' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'contentobject_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'version',
        ),
      ),
      'ezcontentclass_version' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'version',
        ),
      ),
    ),
  ),
  'ezcontentclass_attribute' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'identifier' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'data_type_string' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'is_searchable' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_required' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
      'placement' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int1' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int2' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int3' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int4' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_float1' => 
      array (
        'type' => 'float',
      ),
      'data_float2' => 
      array (
        'type' => 'float',
      ),
      'data_float3' => 
      array (
        'type' => 'float',
      ),
      'data_float4' => 
      array (
        'type' => 'float',
      ),
      'data_text1' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text2' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text3' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text4' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'data_text5' => 
      array (
        'type' => 'text',
      ),
      'is_information_collector' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'can_translate' => 
      array (
        'length' => '11',
        'type' => 'int',
        'default' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezcontentclass_classgroup' => 
  array (
    'fields' => 
    array (
      'contentclass_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'group_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'group_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentclass_id',
          1 => 'contentclass_version',
          2 => 'group_id',
        ),
      ),
    ),
  ),
  'ezcontentclassgroup' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcontentobject' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'owner_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'section_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'current_version' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'is_published' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'published' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'remote_id' => 
      array (
        'length' => '100',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcontentobject_attribute' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'language_code' => 
      array (
        'length' => '20',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclassattribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text' => 
      array (
        'type' => 'text',
      ),
      'data_int' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_float' => 
      array (
        'type' => 'float',
      ),
      'attribute_original_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'sort_key_int' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'sort_key_string' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'data_type_string' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'version',
        ),
      ),
      'ezcontentobject_attribute_contentobject_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_id',
        ),
      ),
      'ezcontentobject_attribute_language_code' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'language_code',
        ),
      ),
      'sort_key_int' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'sort_key_int',
        ),
      ),
      'sort_key_string' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'sort_key_string',
        ),
      ),
      'ezcontentobject_attribute_co_id_ver_lang_code' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_id',
          1 => 'version',
          2 => 'language_code',
        ),
      ),
    ),
  ),
  'ezcontentobject_link' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'from_contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'from_contentobject_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'to_contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezcontentobject_name' => 
  array (
    'fields' => 
    array (
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'content_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'content_translation' => 
      array (
        'length' => '20',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'real_translation' => 
      array (
        'length' => '20',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_id',
          1 => 'content_version',
          2 => 'content_translation',
        ),
      ),
    ),
  ),
  'ezcontentobject_tree' => 
  array (
    'fields' => 
    array (
      'node_id' => 
      array (
        'type' => 'auto_increment',
      ),
      'parent_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_version' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_is_published' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'depth' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'path_string' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'sort_field' => 
      array (
        'length' => '11',
        'type' => 'int',
        'default' => '1',
      ),
      'sort_order' => 
      array (
        'length' => '1',
        'type' => 'int',
        'default' => '1',
      ),
      'priority' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'path_identification_string' => 
      array (
        'type' => 'text',
      ),
      'main_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'node_id',
        ),
      ),
      'ezcontentobject_tree_path' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'path_string',
        ),
      ),
      'ezcontentobject_tree_p_node_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'parent_node_id',
        ),
      ),
      'ezcontentobject_tree_co_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_id',
        ),
      ),
      'ezcontentobject_tree_depth' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'depth',
        ),
      ),
    ),
  ),
  'ezcontentobject_version' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_event_pos' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezdiscountrule' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezdiscountsubrule' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'discountrule_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'discount_percent' => 
      array (
        'type' => 'float',
      ),
      'limitation' => 
      array (
        'length' => '1',
        'type' => 'char',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezdiscountsubrule_value' => 
  array (
    'fields' => 
    array (
      'discountsubrule_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'value' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'issection' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'discountsubrule_id',
          1 => 'value',
          2 => 'issection',
        ),
      ),
    ),
  ),
  'ezenumobjectvalue' => 
  array (
    'fields' => 
    array (
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_attribute_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'enumid' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'enumelement' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'enumvalue' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'contentobject_attribute_version',
          2 => 'enumid',
        ),
      ),
      'ezenumobjectvalue_co_attr_id_co_attr_ver' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'contentobject_attribute_version',
        ),
      ),
    ),
  ),
  'ezenumvalue' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentclass_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_attribute_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'enumelement' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'enumvalue' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'placement' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'contentclass_attribute_id',
          2 => 'contentclass_attribute_version',
        ),
      ),
      'ezenumvalue_co_cl_attr_id_co_class_att_ver' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentclass_attribute_id',
          1 => 'contentclass_attribute_version',
        ),
      ),
    ),
  ),
  'ezforgot_password' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'hash_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'time' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezgeneral_digest_user_settings' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'address' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'receive_digest' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'digest_type' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'day' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'time' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezimage' => 
  array (
    'fields' => 
    array (
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'original_filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'mime_type' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'alternative_text' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezimagefile' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'filepath' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezimagefile_coid' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
        ),
      ),
      'ezimagefile_file' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'filepath',
        ),
      ),
    ),
  ),
  'ezimagevariation' => 
  array (
    'fields' => 
    array (
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'additional_path' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'requested_width' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'requested_height' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'width' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'height' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'version',
          2 => 'requested_width',
          3 => 'requested_height',
        ),
      ),
    ),
  ),
  'ezinfocollection' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'user_identifier' => 
      array (
        'length' => '34',
        'type' => 'varchar',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezinfocollection_attribute' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'informationcollection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text' => 
      array (
        'type' => 'text',
      ),
      'data_int' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_float' => 
      array (
        'type' => 'float',
      ),
      'contentclass_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezkeyword' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'keyword' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'class_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezkeyword_attribute_link' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'keyword_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'objectattribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezmedia' => 
  array (
    'fields' => 
    array (
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'original_filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'mime_type' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'width' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'height' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'has_controller' => 
      array (
        'length' => '1',
        'type' => 'int',
      ),
      'is_autoplay' => 
      array (
        'length' => '1',
        'type' => 'int',
      ),
      'pluginspage' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'quality' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'controls' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'is_loop' => 
      array (
        'length' => '1',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_attribute_id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezmessage' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'send_method' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'send_weekday' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'send_time' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'destination_address' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'body' => 
      array (
        'type' => 'text',
      ),
      'is_sent' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezmodule_run' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'workflow_process_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'module_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'function_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'module_data' => 
      array (
        'type' => 'text',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezmodule_run_workflow_process_id_s' => 
      array (
        'type' => 'unique',
        'fields' => 
        array (
          0 => 'workflow_process_id',
        ),
      ),
    ),
  ),
  'eznode_assignment' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_version' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'parent_node' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'sort_field' => 
      array (
        'length' => '11',
        'type' => 'int',
        'default' => '1',
      ),
      'sort_order' => 
      array (
        'length' => '1',
        'type' => 'int',
        'default' => '1',
      ),
      'is_main' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'from_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'remote_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'eznotificationcollection' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'event_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'handler' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'transport' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'data_subject' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'eznotificationcollection_item' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'collection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'event_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'address' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'send_date' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'eznotificationevent' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'event_type_string' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'data_int1' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int2' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int3' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_int4' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text1' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text2' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text3' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'data_text4' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezoperation_memento' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'memento_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'memento_data' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'main' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'main_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'memento_key',
        ),
      ),
      'ezoperation_memento_memento_key_main' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'memento_key',
          1 => 'main',
        ),
      ),
    ),
  ),
  'ezorder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'productcollection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_temporary' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'order_nr' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data_text_2' => 
      array (
        'type' => 'text',
      ),
      'data_text_1' => 
      array (
        'type' => 'text',
      ),
      'account_identifier' => 
      array (
        'length' => '100',
        'type' => 'varchar',
        'not_null' => '1',
        'default' => 'default',
      ),
      'ignore_vat' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezorder_item' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'order_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'description' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'price' => 
      array (
        'type' => 'float',
      ),
      'vat_value' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezorder_item_order_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'order_id',
        ),
      ),
    ),
  ),
  'ezpdf_export' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'show_frontpage' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'intro_text' => 
      array (
        'type' => 'text',
      ),
      'sub_text' => 
      array (
        'type' => 'text',
      ),
      'source_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'export_structure' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'export_classes' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'site_access' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'pdf_filename' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezpolicy' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'role_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'function_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'module_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'limitation' => 
      array (
        'length' => '1',
        'type' => 'char',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezpolicy_limitation' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'policy_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'identifier' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'role_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'function_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'module_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezpolicy_limitation_value' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'limitation_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'value' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezpreferences' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '100',
        'type' => 'varchar',
      ),
      'value' => 
      array (
        'length' => '100',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezpreferences_name' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'name',
        ),
      ),
    ),
  ),
  'ezproductcollection' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezproductcollection_item' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'productcollection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'item_count' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'price' => 
      array (
        'type' => 'double',
      ),
      'is_vat_inc' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'vat_value' => 
      array (
        'type' => 'float',
      ),
      'discount' => 
      array (
        'type' => 'float',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezproductcollection_item_productcollection_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'productcollection_id',
        ),
      ),
      'ezproductcollection_item_contentobject_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'productcollection_id',
        ),
      ),
    ),
  ),
  'ezproductcollection_item_opt' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'item_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'option_item_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'value' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'price' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'object_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezproductcollection_item_opt_item_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'item_id',
        ),
      ),
    ),
  ),
  'ezrole' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'value' => 
      array (
        'length' => '1',
        'type' => 'char',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezrss_export' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'url' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'image_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'active' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'access_url' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'site_access' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'rss_version' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezrss_export_item' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'rssexport_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'source_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'class_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'description' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezrss_export_rsseid' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'rssexport_id',
        ),
      ),
    ),
  ),
  'ezrss_import' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'url' => 
      array (
        'type' => 'text',
      ),
      'destination_node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'class_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'class_title' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'class_url' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'class_description' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'active' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'object_owner_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezsearch_object_word_link' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'word_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'frequency' => 
      array (
        'type' => 'float',
        'not_null' => '1',
      ),
      'placement' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'prev_word_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'next_word_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'published' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'section_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'identifier' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'integer_value' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezsearch_object_word_link_object' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_id',
        ),
      ),
      'ezsearch_object_word_link_word' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'word_id',
        ),
      ),
      'ezsearch_object_word_link_frequency' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'frequency',
        ),
      ),
      'ezsearch_object_word_link_identifier' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'identifier',
        ),
      ),
      'ezsearch_object_word_link_integer_value' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'integer_value',
        ),
      ),
    ),
  ),
  'ezsearch_return_count' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'phrase_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'time' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'count' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezsearch_search_phrase' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'phrase' => 
      array (
        'length' => '250',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezsearch_word' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'word' => 
      array (
        'length' => '150',
        'type' => 'varchar',
      ),
      'object_count' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezsearch_word' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'word',
        ),
      ),
    ),
  ),
  'ezsection' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'locale' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'navigation_part_identifier' => 
      array (
        'length' => '100',
        'type' => 'varchar',
        'default' => 'ezcontentnavigationpart',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezsession' => 
  array (
    'fields' => 
    array (
      'session_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'expiration_time' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'data' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'session_key',
        ),
      ),
      'expiration_time' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'expiration_time',
        ),
      ),
    ),
  ),
  'ezsite_data' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'length' => '60',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'value' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'name',
        ),
      ),
    ),
  ),
  'ezsubtree_notification_rule' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'address' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'use_digest' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'eztipafriend_counter' => 
  array (
    'fields' => 
    array (
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'count' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'node_id',
        ),
      ),
    ),
  ),
  'eztrigger' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'module_name' => 
      array (
        'length' => '200',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'function_name' => 
      array (
        'length' => '200',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'connect_type' => 
      array (
        'length' => '1',
        'type' => 'char',
        'not_null' => '1',
      ),
      'workflow_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'eztrigger_def_id' => 
      array (
        'type' => 'unique',
        'fields' => 
        array (
          0 => 'module_name',
          1 => 'function_name',
          2 => 'connect_type',
        ),
      ),
      'eztrigger_fetch' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'name',
          1 => 'module_name',
          2 => 'function_name',
        ),
      ),
    ),
  ),
  'ezurl' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'url' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_valid' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'last_checked' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'original_url_md5' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezurl_object_link' => 
  array (
    'fields' => 
    array (
      'url_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentobject_attribute_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'url_id',
          1 => 'contentobject_attribute_id',
          2 => 'contentobject_attribute_version',
        ),
      ),
    ),
  ),
  'ezurlalias' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'source_url' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'source_md5' => 
      array (
        'length' => '32',
        'type' => 'varchar',
      ),
      'destination_url' => 
      array (
        'type' => 'text',
        'not_null' => '1',
      ),
      'is_internal' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'forward_to_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_wildcard' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezurlalias_source_md5' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'source_md5',
        ),
      ),
      'ezurlalias_source_url' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'source_url',
        ),
      ),
      'ezurlalias_desturl' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'destination_url',
        ),
      ),
    ),
  ),
  'ezuser' => 
  array (
    'fields' => 
    array (
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'login' => 
      array (
        'length' => '150',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'email' => 
      array (
        'length' => '150',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'password_hash_type' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
        'default' => '1',
      ),
      'password_hash' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'contentobject_id',
        ),
      ),
    ),
  ),
  'ezuser_accountkey' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'hash_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'time' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezuser_discountrule' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'discountrule_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezuser_role' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'role_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'contentobject_id' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezuser_role_contentobject_id' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'contentobject_id',
        ),
      ),
    ),
  ),
  'ezuser_setting' => 
  array (
    'fields' => 
    array (
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_enabled' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
      'max_login' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
  ),
  'ezvattype' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'percentage' => 
      array (
        'type' => 'float',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezview_counter' => 
  array (
    'fields' => 
    array (
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'count' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'node_id',
        ),
      ),
    ),
  ),
  'ezwaituntildatevalue' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'workflow_event_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_event_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'contentclass_attribute_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'workflow_event_id',
          2 => 'workflow_event_version',
        ),
      ),
      'ezwaituntildateevalue_wf_ev_id_wf_ver' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'workflow_event_id',
          1 => 'workflow_event_version',
        ),
      ),
    ),
  ),
  'ezwishlist' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'productcollection_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezworkflow' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'is_enabled' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_type_string' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezworkflow_assign' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'workflow_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'access_type' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'as_tree' => 
      array (
        'length' => '1',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezworkflow_event' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_type_string' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'description' => 
      array (
        'length' => '50',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'data_int1' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int2' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int3' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_int4' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'data_text1' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text2' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text3' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'data_text4' => 
      array (
        'length' => '50',
        'type' => 'varchar',
      ),
      'placement' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
          1 => 'version',
        ),
      ),
    ),
  ),
  'ezworkflow_group' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'creator_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modifier_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
  'ezworkflow_group_link' => 
  array (
    'fields' => 
    array (
      'workflow_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'group_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'workflow_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'group_name' => 
      array (
        'length' => '255',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'workflow_id',
          1 => 'group_id',
          2 => 'workflow_version',
        ),
      ),
    ),
  ),
  'ezworkflow_process' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'auto_increment',
      ),
      'process_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'workflow_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'user_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'content_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'content_version' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'node_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'session_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
        'not_null' => '1',
      ),
      'event_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'event_position' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'last_event_id' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'last_event_position' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'last_event_status' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'event_status' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'created' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'modified' => 
      array (
        'length' => '11',
        'type' => 'int',
        'not_null' => '1',
      ),
      'activation_date' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'event_state' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'status' => 
      array (
        'length' => '11',
        'type' => 'int',
      ),
      'parameters' => 
      array (
        'type' => 'text',
      ),
      'memento_key' => 
      array (
        'length' => '32',
        'type' => 'varchar',
      ),
    ),
    'indexes' => 
    array (
      'PRIMARY' => 
      array (
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      'ezworkflow_process_process_key' => 
      array (
        'type' => 'non-unique',
        'fields' => 
        array (
          0 => 'process_key',
        ),
      ),
    ),
  ),
);
return $schema;
?>
