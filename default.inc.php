<?php
		
// Plugin default configuration file.
// Override these entries in the global config file.
// Users can change exposed entries form the application settings ui.
$config = array();

// activate plugin features
$config['plugin.responses.activate_plugin'] = true;

// permit plugin logging
$config['plugin.responses.enable_logging'] = true;

// allow to inject plugin-provided templates
$config['plugin.responses.enable_inject'] = true;

// inject plugin-provided templates as read-only vs editable
$config['plugin.responses.inject_static'] = true;

// allow one time reset of all user responses 
$config['plugin.responses.memento_reset'] = false;

// XXX: no config override
// plugin-provided template
$response_text_help = <<<EOT
    #
    This response template shows available plugin fields.
    Variable substitution uses curly braces around field names. 
    To review this tempalte structure, see: 'Settings -> Responses -> ...'.
    #
    Availble field types (reflected as suffux in the field name):
    'text' - original field value [ example: "last, first" <user@host> ]
    'name' - contact name derived form address [ example: "last, first" ]
    'full' - full name guessed form address [ example: "First Last" ]
    'head' - first name guessed form address [ example: "First" ]
    'tail' - last name guessed form address [ example: "Last" ]
    'mail' - mail-only extracted form address [ example: "user@host" ] 
    #
    Template variable substitution result (view in the mail compose window):
    #
    # mail 'from' - solo item
        from_text : {from_text}
        from_name : {from_name}
        from_full : {from_full}
        from_head : {from_head}
        from_tail : {from_tail}
        from_mail : {from_mail}
    #
    # mail 'to' - one line item list, with comma separator
        to_text : {to_text}
        to_name : {to_name}
        to_full : {to_full}
        to_head : {to_head}
        to_tail : {to_tail}
        to_mail : {to_mail}
    #
    # mail 'cc' - one line item list, with comma separator
        cc_text : {cc_text}
        cc_name : {cc_name}
        cc_full : {cc_full}
        cc_head : {cc_head}
        cc_tail : {cc_tail}
        cc_mail : {cc_mail}
EOT;

// XXX: no config override
// plugin-provided template
$response_text_thank_you = <<<EOT
    {to_head}, hello.
    
    Thank you,
    {from_head}.
    
    --
    {from_full} <{from_mail}>
EOT;

// XXX: no config override
// plugin-provided template
$response_html_thank_you = <<<EOT
    <b>TODO</b>
EOT;

// TODO: use local system templates
// plugin-provided template collection
$config['plugin.responses.template_mapa'] = array(
        array(
            'name' => '[plugin.responses] help', // XXX: name is response identity
            'text' => $response_text_help,
            'format' => 'text',
        ),
        array(
            'name' => '[plugin.responses] text thank you', // XXX: name is response identity
            'text' => $response_text_thank_you,
            'format' => 'text',
        ),
        array(
            'name' => '[plugin.responses] html thank you', // XXX: name is response identity
            'text' => $response_html_thank_you,
            'format' => 'html',
        ),
);

?>