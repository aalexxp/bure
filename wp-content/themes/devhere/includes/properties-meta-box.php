<?php
class Properties_Meta_Box {

    protected $suburb_list = array('Lake Manchester', 'Kholo', 'Enoggera Reservoir', 'Upper Brookfield', 'Mount Crosby','Chuwar','Karana Downs','Banks Creek','England Creek','Pullenvale','Anstead','Brookfield','Bellbowrie','Moggill','Pinjara Hills','Kenmore','Kenmore Hills','Fig Tree Pocket','Indooroopilly','St Lucia','Taringa','Toowong','Bardon','Auchenflower','Milton','Bardon','Paddington','Ashgrove','The Gap','Enoggera','Mount Coot-tha','Chapel Hill','Alderley','Red Hill','Kelvin Grove','Petrie Terrace','Brisbane City','Newmarket','Upper Kedron','Ferny Grove','Keperra','Mitchelton','Gaythorne','Everton Park','Stafford','Stafford Heights','Wilston','Grange','Windsor','McDowall','Herston','Spring Hill','Bridgeman Downs','Aspley','Carseldine','Bald Hills','Bracken Ridge','Brighton','Sandgate','Aspley','Chermside West','Chermside','Kedron','Gordon Park','Lutwyche','Wooloowin','Deagon','Shorncliffe','Boondall','Geebung','Virginia','Banyo','Northgate','Wavell Heights','Nundah','Clayfield','Hendra','Hamilton','Ascot','Fitzgibbon','Zillmere','Taigum','Albion','Nudgee','Nudgee Beach','Brisbane Airport','Eagle Farm','Newstead','New Farm','Teneriffe','Fortitude Valley','Bowen Hills','Pinkenba','Westlake','Riverhills','Wacol','Ellen Grove','Forest Lake','Richlands','Inala','Doolandella','Heathwood','Pallara','Darra','Sumner','Jamboree Heights','Middle Park','Mount Ommaney','Jindalee','Sinamon Park','Seventeen Mile Rocks','Oxley','Durack','Corinda','Sherwood','Graceville','Chelmer','Tennyson','Rocklea','Archerfield','Willawong','Acacia Ridge','Yeerongpilly','Yeronga','Larapinta','Parkinson','Algester','Coopers Plains','Salisbury','Moorooka','Annerley','Tarragindi','Calamvale','Drewvale','Karawatha','Stretton','Runcorn','Kuraby','Sunnybank Hills','Sunnybank','Holland Park','Holland Park West','Eight Mile Plains','Macgregor','Upper Mount Gravatt','Nathan','Mount Gravatt','Mount Gravatt East','Robertson','Wishart','Rochedale','Burbank','Chandler','Mackenzie','Belmont','Carindale','Carina','Carina Heights','Mansfield','Ransome','Gumdale','Manly West','Manly','Lota','Wynnum','Wynnum West','Hammant','Tingalpa','Cannon Hill','Murarrie','Hemmant','Lytton','Port of Brisbane','Morningside','Balmoral','Bulimba','Hawthorne','Norman Park','Seven Hills','Camp Hill','Coorparoo','East Brisbane','Kangaroo Point','Woolloongabba','Fairfield','West End','Highgate Hill','Greenslopes','South Brisbane');
    protected $status_list = array('For sale', 'Under Contract', 'Sold', 'Other');
    protected $config = array('1','2','3','3+', 'Other');
    protected $zoning = array(
        'LDR'  => 'Low Density Residential',
        'LMR1' => 'Low Medium Density Residential (2 Storeys)',
        'LMR2' => 'Low Medium Density Residential (2 or 3 Storey Mix)',
        'LMR3' => 'Low Medium Density Residential (3 Storeys)',
        'CR1'  => 'Character Residential (Character',
        'CR2'  => 'Character Residential (Infill Housing)',
        'MDR'  => 'Medium Density Residential',
        'HDR1' => 'High Density Residential (Up to 8 storeys)',
        'HDR2' => 'High Density Residential (Up to 15 storeys)',
        'EC'   => 'Emerging Community',
        'TA'   => 'Tourist Accommodation',
        'NC'   => 'Neighbourhood Centre',
        'DC1'  => 'District Centre (District)',
        'DC2'  => 'District Centre (Corridor)',
        'MC'   => 'Major Centre',
        'PC1'  => 'Principal Centre (City Centre)',
        'PC2'  => 'Principal Centre (Regional Centre)',
        'LII'  => 'Low impact Industry',
        'IN1'  => 'General Industry A',
        'IN2'  => 'General Industry B',
        'IN3'  => 'General Industry C',
        'SI'   => 'Special Industry',
        'II'   => 'Industry Investigation',
        'SR'   => 'Sport and Recreation',
        'SR1'  => 'Sport and Recreation (Local)',
        'SR2'  => 'Sport and Recreation (District)',
        'SR3'  => 'Sport and Recreation (Metropolitan)',
        'OS'   => 'Open Space',
        'OS1'  => 'Open Space (Local)',
        'OS2'  => 'Open Space (District)',
        'OS3'  => 'Open Space (Metropolitan)',
        'EM'   => 'Environmental Management',
        'CN'   => 'Conservation',
        'CN1'  => 'Conservation (Local)',
        'CN2'  => 'Conservation (District)',
        'CN3'  => 'Conservation (Metropolitan)',
        'EI'   => 'Extractive Industry',
        'MU1'  => 'Mixed use (Inner City)',
        'MU2'  => 'Mixed use (Centre Frame)',
        'MU3'  => 'Mixed use (Corridor)',
        'RU'   => 'Rural',
        'RR'   => 'Rural Residential',
        'T'    => 'Township',
        'CF1'  => 'Community Facilities (Major Health Care)',
        'CF2'  => 'Community Facilities (Major Sports Venue)',
        'CF3'  => 'Community Facilities (Cemetery)',
        'CF4'  => 'Community Facilities (Community Purposes)',
        'CF5'  => 'Community Facilities (Education Purposes)',
        'CF6'  => 'Community Facilities (Emergency Services)',
        'CF7'  => 'Community Facilities (Health Care Purposes)',
        'SC1'  => 'Specialised Centre (Major Education and Research Facility)',
        'SC2'  => 'Specialised Centre (Entertainment and Conference Centre)',
        'SC3'  => 'Specialised Centre (Brisbane Markets)',
        'SC4'  => 'Specialised Centre (Large Format Retail)',
        'SC5'  => 'Specialised Centre (Mixed Industry and Business)',
        'SC6'  => 'Specialised Centre (Marina)',
        'SP1'  => 'Special Purpose (Defence)',
        'SP2'  => 'Special Purpose (Detention facility)',
        'SP3'  => 'Special Purpose (Transport infrastructure)',
        'SP4'  => 'Special Purpose (Utility Services)',
        'SP5'  => 'Special Purpose (Airport)',
        'SP6'  => 'Special Purpose (Port)',
    );

    protected $dev_options = array( 'Subdivision/Houses', 'Townhouses', 'Low-Medium Density Units', 'Medium Density Units', 'High Density Units', 'Future Development', 'Other' );
    protected $slope_direction = array( 'Towards Street', 'Towards Rear', 'Across', 'Flat', 'Other' );

    public function __construct() {

        if ( is_admin() ) {
            add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
            add_action( 'post_edit_form_tag', array( $this, 'update_edit_form' ) );
        }

    }

    public function init_metabox() {

        add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
        add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

    }

    public function add_metabox() {

        add_meta_box(
            'property_props',
            'Property Fields',
            array( $this, 'render_metabox' ),
            'properties'
        );

    }

    public function render_metabox( $post ) {

        // Add nonce for security and authentication.
        wp_nonce_field( 'props_nonce_action', 'props_nonce' );

        // Retrieve an existing value from the database.
        $prop_number                    = get_post_meta( $post->ID, 'prop_number', true );
        $prop_street                    = get_post_meta( $post->ID, 'prop_street', true );
        $prop_street_file               = get_post_meta( $post->ID, 'prop_street_file', true );
        $prop_suburb                    = get_post_meta( $post->ID, 'prop_suburb', true );
        $prop_lot                       = get_post_meta( $post->ID, 'prop_lot', true );
        $prop_lot_file                  = get_post_meta( $post->ID, 'prop_lot_file', true );
        $prop_rpsp                      = get_post_meta( $post->ID, 'prop_rpsp', true );
        $prop_rpsp_file                 = get_post_meta( $post->ID, 'prop_rpsp_file', true );
        $prop_status                    = get_post_meta( $post->ID, 'prop_status', true );
        $prop_status_add                = get_post_meta( $post->ID, 'prop_status_add', true );
        $prop_lprice                    = get_post_meta( $post->ID, 'prop_lprice', true );
        $prop_agent_1                   = get_post_meta( $post->ID, 'prop_agent_1', true );
        $prop_agent_2                   = get_post_meta( $post->ID, 'prop_agent_2', true );
        $prop_agent_compamy             = get_post_meta( $post->ID, 'prop_agent_compamy', true );
        $prop_agent_1_phone             = get_post_meta( $post->ID, 'prop_agent_1_phone', true );
        $prop_agent_2_phone             = get_post_meta( $post->ID, 'prop_agent_2_phone', true );
        $prop_agent_1_email             = get_post_meta( $post->ID, 'prop_agent_1_email', true );
        $prop_agent_2_email             = get_post_meta( $post->ID, 'prop_agent_2_email', true );
        $prop_ad_link                   = get_post_meta( $post->ID, 'prop_ad_link', true );
        $prop_config                    = get_post_meta( $post->ID, 'prop_config', true );
        $prop_config_add                = get_post_meta( $post->ID, 'prop_config_add', true );
        $prop_land_area                 = get_post_meta( $post->ID, 'prop_land_area', true );
        $prop_frontage                  = get_post_meta( $post->ID, 'prop_frontage', true );
        $prop_zoning                    = get_post_meta( $post->ID, 'prop_zoning', true );
        $prop_assessable_dev_options    = get_post_meta( $post->ID, 'prop_assessable_dev_options', true );
        $prop_dev_approvals             = get_post_meta( $post->ID, 'prop_dev_approvals', true );
        $prop_dev_constrains            = get_post_meta( $post->ID, 'prop_dev_constrains', true );
        $prop_asga                      = get_post_meta( $post->ID, 'prop_asga', true );
        $prop_slope_direction           = get_post_meta( $post->ID, 'prop_slope_direction', true );
        $prop_slope_direction_add       = get_post_meta( $post->ID, '$prop_slope_direction_add', true );
        $prop_neighbour_plan            = get_post_meta( $post->ID, 'prop_neighbour_plan', true );
        $prop_flooding                  = get_post_meta( $post->ID, 'prop_flooding', true );
        $prop_demolition_control        = get_post_meta( $post->ID, 'prop_demolition_control', true );
        $prop_storm_discharge           = get_post_meta( $post->ID, 'prop_storm_discharge', true );
        $prop_sewer_location            = get_post_meta( $post->ID, 'prop_sewer_location', true );
        $prop_pre_1911                  = get_post_meta( $post->ID, 'prop_pre_1911', true );
        $prop_heritage                  = get_post_meta( $post->ID, 'prop_heritage', true );
        $prop_walk_dist                 = get_post_meta( $post->ID, 'prop_walk_dist', true );
        $prop_listed_date               = get_post_meta( $post->ID, 'prop_listed_date', true );
        $prop_area_map                  = get_post_meta( $post->ID, 'prop_area_map', true );
        $prop_pd_link                   = get_post_meta( $post->ID, 'prop_pd_link', true );
        $prop_countour_link             = get_post_meta( $post->ID, 'prop_countour_link', true );
        $prop_sewer_link                = get_post_meta( $post->ID, 'prop_sewer_link', true );
        $prop_storm_link                = get_post_meta( $post->ID, 'prop_storm_link', true );
        $prop_river_flooding            = get_post_meta( $post->ID, 'prop_river_flooding', true );
        $prop_creek_flooding            = get_post_meta( $post->ID, 'prop_creek_flooding', true );
        $prop_flow_flooding             = get_post_meta( $post->ID, 'prop_flow_flooding', true );
        $prop_floodwise                 = get_post_meta( $post->ID, 'prop_floodwise', true );
        $prop_wetlands                  = get_post_meta( $post->ID, 'prop_wetlands', true );
        $prop_1946_aerial               = get_post_meta( $post->ID, 'prop_1946_aerial', true );
        $prop_biodiversity              = get_post_meta( $post->ID, 'prop_biodiversity', true );
        $prop_bushfire                  = get_post_meta( $post->ID, 'prop_bushfire', true );
        $prop_neighbour_plan_map        = get_post_meta( $post->ID, 'prop_neighbour_plan_map', true );

        // Set default values.
        if( empty( $prop_number ) ) $prop_number = '';
        if( empty( $prop_street ) ) $prop_street = '';
        if( empty( $prop_street_file ) ) $prop_street_file = '';
        if( empty( $prop_suburb ) ) $prop_suburb = '';
        if( empty( $prop_lot ) ) $prop_lot = '';
        if( empty( $prop_lot_file ) ) $prop_lot_file = '';
        if( empty( $prop_rpsp ) ) $prop_rpsp = '';
        if( empty( $prop_rpsp_file ) ) $prop_rpsp_file = '';
        if( empty( $prop_status ) ) $prop_status = '';
        if( empty( $prop_status_add ) ) $prop_status_add = '';
        if( empty( $prop_lprice ) ) $prop_lprice = '';
        if( empty( $prop_agent_1 ) ) $prop_agent_1 = '';
        if( empty( $prop_agent_2 ) ) $prop_agent_2 = '';
        if( empty( $prop_agent_compamy ) ) $prop_agent_compamy = '';
        if( empty( $prop_agent_1_phone ) ) $prop_agent_1_phone = '';
        if( empty( $prop_agent_2_phone ) ) $prop_agent_2_phone = '';
        if( empty( $prop_agent_1_email ) ) $prop_agent_1_email = '';
        if( empty( $prop_agent_2_email ) ) $prop_agent_2_email = '';
        if( empty( $prop_ad_link ) ) $prop_ad_link = '';
        if( empty( $prop_config ) ) $prop_config = '';
        if( empty( $prop_config_add ) ) $prop_config_add = '';
        if( empty( $prop_land_area ) ) $prop_land_area = '';
        if( empty( $prop_frontage ) ) $prop_frontage = '';
        if( empty( $prop_zoning ) ) $prop_zoning = '';
        if( empty( $prop_assessable_dev_options ) ) $prop_assessable_dev_options = '';
        if( empty( $prop_dev_approvals ) ) $prop_dev_approvals = '';
        if( empty( $prop_dev_constrains ) ) $prop_dev_constrains = '';
        if( empty( $prop_asga ) ) $prop_asga = '';
        if( empty( $prop_slope_direction ) ) $prop_slope_direction = '';
        if( empty( $prop_slope_direction_add ) ) $prop_slope_direction_add = '';
        if( empty( $prop_neighbour_plan ) ) $prop_neighbour_plan = '';
        if( empty( $prop_flooding ) ) $prop_flooding = '';
        if( empty( $prop_demolition_control ) ) $prop_demolition_control = '';
        if( empty( $prop_storm_discharge ) ) $prop_storm_discharge = '';
        if( empty( $prop_sewer_location ) ) $prop_sewer_location = '';
        if( empty( $prop_pre_1911 ) ) $prop_pre_1911 = '';
        if( empty( $prop_heritage ) ) $prop_heritage = '';
        if( empty( $prop_walk_dist ) ) $prop_walk_dist = '';
        if( empty( $prop_listed_date ) ) $prop_listed_date = '';
        if( empty( $prop_area_map ) ) $prop_area_map = '';
        if( empty( $prop_pd_link ) ) $prop_pd_link = '';
        if( empty( $prop_countour_link ) ) $prop_countour_link = '';
        if( empty( $prop_sewer_link ) ) $prop_sewer_link = '';
        if( empty( $prop_storm_link ) ) $prop_storm_link = '';
        if( empty( $prop_river_flooding ) ) $prop_river_flooding = '';
        if( empty( $prop_creek_flooding ) ) $prop_creek_flooding = '';
        if( empty( $prop_flow_flooding ) ) $prop_flow_flooding = '';
        if( empty( $prop_floodwise ) ) $prop_floodwise = '';
        if( empty( $prop_wetlands ) ) $prop_wetlands = '';
        if( empty( $prop_1946_aerial ) ) $prop_1946_aerial = '';
        if( empty( $prop_biodiversity ) ) $prop_biodiversity = '';
        if( empty( $prop_bushfire ) ) $prop_bushfire = '';
        if( empty( $prop_neighbour_plan_map ) ) $prop_neighbour_plan_map = '';

        // Form fields.
        echo '<table class="form-table">';

        echo '<tr>';
        echo '<th><label for="prop_number" class="prop_number">' . __( 'Property Number' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_number" name="prop_number" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_number ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_street" class="prop_street">' . __( 'Property Street (text or file)' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_street" name="prop_street" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_street ) . '">';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        echo '<input type="file" name="prop_street_file" value="">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_suburb" class="prop_suburb">' . __( 'Property Suburb' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_suburb" name="prop_suburb" class="prop_select">';
        foreach ($this->suburb_list as $suburb) {
            $selected = ( $prop_suburb == $suburb ) ? 'selected="selected"' : '';
            echo '<option value="'.$suburb.'" '.$selected.'>'.$suburb.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_lot" class="prop_lot">' . __( 'Property Lot#' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_lot" name="prop_lot" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_lot ) . '">';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        echo '<input type="file" name="prop_lot_file" value="' . esc_attr__( $prop_lot_file ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_rpsp" class="prop_rpsp">' . __( 'Property RS/SP' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_rpsp" name="prop_rpsp" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_rpsp ) . '">';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        echo '<input type="file" name="prop_rpsp_file" value="' . esc_attr__( $prop_rpsp_file ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_status" class="prop_status">' . __( 'Property Status' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_status" name="prop_status" class="prop_select">';
        foreach ($this->status_list as $status) {
            $selected = ( $prop_status == $status ) ? 'selected="selected"' : '';
            echo '<option value="'.$status.'" '.$selected.'>'.$status.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        $prop_status_add = ( $prop_status == 'Other' ) ? $prop_status_add : '';
        echo '<input type="text" name="prop_status_add" class="prop_status_add" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_status_add ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_lprice" class="prop_lprice">' . __( 'Listing Price' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_lprice" name="prop_lprice" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_lprice ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_1" class="prop_agent_1">' . __( 'Agent 1 Name' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_1" name="prop_agent_1" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_1 ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_2" class="prop_agent_2">' . __( 'Agent 2 Name' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_2" name="prop_agent_2" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_2 ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_compamy" class="prop_agent_compamy">' . __( 'Agent Company' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_compamy" name="prop_agent_compamy" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_compamy ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_1_phone" class="prop_agent_1_phone">' . __( 'Agent 1 Phone' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_1_phone" name="prop_agent_1_phone" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_1_phone ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_2_phone" class="prop_agent_2_phone">' . __( 'Agent 2 Phone' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_2_phone" name="prop_agent_2_phone" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_2_phone ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_1_email" class="prop_agent_1_email">' . __( 'Agent 1 Email' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_1_email" name="prop_agent_1_email" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_1_email ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_agent_2_email" class="prop_agent_2_email">' . __( 'Agent 2 Email' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_agent_2_email" name="prop_agent_2_email" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_agent_2_email ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_ad_link" class="prop_ad_link">' . __( 'Link to Add' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_ad_link" name="prop_ad_link" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_ad_link ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_config" class="prop_config">' . __( 'Lot Configuration' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_config" name="prop_config" class="prop_select">';
        foreach ($this->config as $config) {
            $selected = ( $prop_config == $config ) ? 'selected="selected"' : '';
            echo '<option value="'.$config.'" '.$selected.'>'.$config.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        $prop_config_add = ( $prop_config == 'Other' ) ? $prop_config_add : '';
        echo '<input type="text" name="prop_status_add" class="prop_status_add" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_config_add ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_land_area" class="prop_land_area">' . __( 'Land Area' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_land_area" name="prop_land_area" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_land_area ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_frontage" class="prop_frontage">' . __( 'Frontage' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_frontage" name="prop_frontage" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_frontage ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_zoning" class="prop_zoning">' . __( 'Zoning' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_zoning" name="prop_zoning[]" class="prop_select" multiple="multiple">';
        foreach ($this->zoning as $key => $value) {
            $selected = ( in_array( $key, $prop_zoning ) ) ? 'selected="selected"' : '';
            echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_assessable_dev_options" class="prop_assessable_dev_options">' . __( 'Code Assessable development options' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_assessable_dev_options" name="prop_assessable_dev_options[]" class="prop_select" multiple="multiple">';
        foreach ($this->dev_options as $options) {
            $selected = ( in_array( $options, $prop_assessable_dev_options ) ) ? 'selected="selected"' : '';
            echo '<option value="'.$options.'" '.$selected.'>'.$options.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_dev_approvals" class="prop_dev_approvals">' . __( 'Development Approvals' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_dev_approvals" name="prop_dev_approvals" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_dev_approvals ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_dev_constrains" class="prop_dev_constrains">' . __( 'Potential development constraints' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_dev_constrains" name="prop_dev_constrains" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_dev_constrains ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_asga" class="prop_asga">' . __( 'Average slope gradient approx' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_asga" name="prop_asga" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_asga ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_slope_direction" class="prop_slope_direction">' . __( 'Slope Direction' ) . '</label></th>';
        echo '<td>';
        echo '<select id="prop_slope_direction" name="prop_prop_slope_directionconfig" class="prop_select">';
        foreach ($this->slope_direction as $direction) {
            $selected = ( $prop_slope_direction == $direction ) ? 'selected="selected"' : '';
            echo '<option value="'.$direction.'" '.$selected.'>'.$direction.'</option>';
        }
        echo '<select/>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th></th>';
        echo '<td>';
        $prop_slope_direction_add = ( $prop_config == 'Other' ) ? $prop_slope_direction_add : '';
        echo '<input type="text" name="prop_status_add" class="prop_status_add" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_slope_direction_add ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_neighbour_plan" class="prop_neighbour_plan">' . __( 'Neighbourhood Plan' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_neighbour_plan" name="prop_neighbour_plan" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_neighbour_plan ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_flooding" class="prop_flooding">' . __( 'Flooding' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_flooding" name="prop_flooding" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_flooding ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_demolition_control" class="prop_demolition_control">' . __( 'Demolition Control' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_demolition_control" name="prop_demolition_control" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_demolition_control ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_storm_discharge" class="prop_storm_discharge">' . __( 'Stormwater Discharge' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_storm_discharge" name="prop_storm_discharge" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_storm_discharge ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_sewer_location" class="prop_sewer_location">' . __( 'Sewer Location' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_sewer_location" name="prop_sewer_location" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_sewer_location ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_pre_1911" class="prop_pre_1911">' . __( 'Pre-1911 House' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_pre_1911" name="prop_pre_1911" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_pre_1911 ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_heritage" class="prop_heritage">' . __( 'Heritage' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_heritage" name="prop_heritage" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_heritage ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_walk_dist" class="prop_walk_dist">' . __( 'Sewer Location' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_walk_dist" name="prop_walk_dist" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_walk_dist ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_listed_date" class="prop_listed_date">' . __( 'Date Listed for Sale' ) . '</label></th>';
        echo '<td>';
        echo '<input type="date" id="prop_listed_date" name="prop_listed_date" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_listed_date ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_area_map" class="prop_area_map">' . __( 'Area Map Link' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_area_map" name="prop_area_map" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_area_map ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_pd_link" class="prop_pd_link">' . __( 'PD Online link' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_pd_link" name="prop_pd_link" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_pd_link ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_countour_link" class="prop_countour_link">' . __( 'Contour link' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_countour_link" name="prop_countour_link" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_countour_link ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_sewer_link" class="prop_sewer_link">' . __( 'Sewer and water link' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_sewer_link" name="prop_sewer_link" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_sewer_link ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_storm_link" class="prop_storm_link">' . __( 'Stormwater link' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_storm_link" name="prop_storm_link" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_storm_link ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_river_flooding" class="prop_river_flooding">' . __( 'River Flooding' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_river_flooding" name="prop_river_flooding" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_river_flooding ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_creek_flooding" class="prop_creek_flooding">' . __( 'Creek Flooding' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_creek_flooding" name="prop_creek_flooding" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_creek_flooding ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_flow_flooding" class="prop_flow_flooding">' . __( 'Overland Flow flooding' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_flow_flooding" name="prop_flow_flooding" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_flow_flooding ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_floodwise" class="prop_floodwise">' . __( 'FloodWise Property Report' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_floodwise" name="prop_floodwise" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_floodwise ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_wetlands" class="prop_wetlands">' . __( 'Wetlands' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_wetlands" name="prop_wetlands" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_wetlands ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_1946_aerial" class="prop_1946_aerial">' . __( '1946 Aerial' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_1946_aerial" name="prop_1946_aerial" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_1946_aerial ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_biodiversity" class="prop_biodiversity">' . __( 'Biodiversity' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_biodiversity" name="prop_biodiversity" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_biodiversity ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_bushfire" class="prop_bushfire">' . __( 'Bushfire' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_bushfire" name="prop_bushfire" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_bushfire ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th><label for="prop_neighbour_plan_map" class="prop_neighbour_plan_map">' . __( 'Neighbourhood plan map' ) . '</label></th>';
        echo '<td>';
        echo '<input type="text" id="prop_neighbour_plan_map" name="prop_neighbour_plan_map" class="prop_field" placeholder="' . esc_attr__( '' ) . '" value="' . esc_attr__( $prop_neighbour_plan_map ) . '">';
        echo '</td>';
        echo '</tr>';

        echo '</table>';

    }

    public function save_metabox( $post_id, $post ) {

        // Add nonce for security and authentication.
        $nonce_name   = $_POST['props_nonce'];
        $nonce_action = 'props_nonce_action';

        // Check if a nonce is set.
        if ( ! isset( $nonce_name ) )
            return;

        // Check if a nonce is valid.
        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) )
            return;

        // Check if the user has permissions to save data.
        if ( ! current_user_can( 'edit_post', $post_id ) )
            return;

        // Check if it's not an autosave.
        if ( wp_is_post_autosave( $post_id ) )
            return;

        // Check if it's not a revision.
        if ( wp_is_post_revision( $post_id ) )
            return;

        // Sanitize user input.
        $prop_number                    = isset( $_POST[ 'prop_number' ] ) ? sanitize_text_field( $_POST[ 'prop_number' ] ) : '';
        $prop_street                    = isset( $_POST[ 'prop_street' ] ) ? sanitize_text_field( $_POST[ 'prop_street' ] ) : '';
        $prop_street_file               = isset( $_FILES[ 'prop_street_file' ] ) ? wp_handle_upload( $_FILES[ 'prop_street_file' ], array( 'test_form' => false ) ) : '';
        $prop_suburb                    = isset( $_POST[ 'prop_suburb' ] ) ? sanitize_text_field( $_POST[ 'prop_suburb' ] ) : '';
        $prop_lot                       = isset( $_POST[ 'prop_lot' ] ) ? sanitize_text_field( $_POST[ 'prop_lot' ] ) : '';
        $prop_lot_file                  = isset( $_FILES[ 'prop_lot_file' ] ) ? wp_handle_upload( $_FILES[ 'prop_lot_file' ], array( 'test_form' => false )  ) : '';
        $prop_rpsp                      = isset( $_POST[ 'prop_rpsp' ] ) ? sanitize_text_field( $_POST[ 'prop_rpsp' ] ) : '';
        $prop_rpsp_file                 = isset( $_FILES[ 'prop_rpsp_file' ] ) ? wp_handle_upload( $_FILES[ 'prop_rpsp_file' ], array( 'test_form' => false ) ) : '';
        $prop_status                    = isset( $_POST[ 'prop_status' ] ) ? sanitize_text_field( $_POST[ 'prop_status' ] ) : '';
        $prop_lprice                    = isset( $_POST[ 'prop_lprice' ] ) ? sanitize_text_field( $_POST[ 'prop_lprice' ] ) : '';
        $prop_agent_1                   = isset( $_POST[ 'prop_agent_1' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_1' ] ) : '';
        $prop_agent_2                   = isset( $_POST[ 'prop_agent_2' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_2' ] ) : '';
        $prop_agent_compamy             = isset( $_POST[ 'prop_agent_compamy' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_compamy' ] ) : '';
        $prop_agent_1_phone             = isset( $_POST[ 'prop_agent_1_phone' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_1_phone' ] ) : '';
        $prop_agent_2_phone             = isset( $_POST[ 'prop_agent_2_phone' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_2_phone' ] ) : '';
        $prop_agent_1_email             = isset( $_POST[ 'prop_agent_1_email' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_1_email' ] ) : '';
        $prop_agent_2_email             = isset( $_POST[ 'prop_agent_2_email' ] ) ? sanitize_text_field( $_POST[ 'prop_agent_2_email' ] ) : '';
        $prop_ad_link                   = isset( $_POST[ 'prop_ad_link' ] ) ? sanitize_text_field( $_POST[ 'prop_ad_link' ] ) : '';
        $prop_config                    = isset( $_POST[ 'prop_config' ] ) ? sanitize_text_field( $_POST[ 'prop_config' ] ) : '';
        $prop_land_area                 = isset( $_POST[ 'prop_land_area' ] ) ? sanitize_text_field( $_POST[ 'prop_land_area' ] ) : '';
        $prop_frontage                  = isset( $_POST[ 'prop_frontage' ] ) ? sanitize_text_field( $_POST[ 'prop_frontage' ] ) : '';
        $prop_zoning                    = isset( $_POST[ 'prop_zoning' ] ) ? ( $_POST[ 'prop_zoning' ] ) : '';
        $prop_assessable_dev_options    = isset( $_POST[ 'prop_assessable_dev_options' ] ) ? ( $_POST[ 'prop_assessable_dev_options' ] ) : '';
        $prop_dev_approvals             = isset( $_POST[ 'prop_dev_approvals' ] ) ? sanitize_text_field( $_POST[ 'prop_dev_approvals' ] ) : '';
        $prop_dev_constrains            = isset( $_POST[ 'prop_dev_constrains' ] ) ? sanitize_text_field( $_POST[ 'prop_dev_constrains' ] ) : '';
        $prop_asga                      = isset( $_POST[ 'prop_asga' ] ) ? sanitize_text_field( $_POST[ 'prop_asga' ] ) : '';
        $prop_slope_direction           = isset( $_POST[ 'prop_slope_direction' ] ) ? sanitize_text_field( $_POST[ 'prop_slope_direction' ] ) : '';
        $prop_neighbour_plan            = isset( $_POST[ 'prop_neighbour_plan' ] ) ? sanitize_text_field( $_POST[ 'prop_neighbour_plan' ] ) : '';
        $prop_flooding                  = isset( $_POST[ 'prop_flooding' ] ) ? sanitize_text_field( $_POST[ 'prop_flooding' ] ) : '';
        $prop_demolition_control        = isset( $_POST[ 'prop_demolition_control' ] ) ? sanitize_text_field( $_POST[ 'prop_demolition_control' ] ) : '';
        $prop_storm_discharge           = isset( $_POST[ 'prop_storm_discharge' ] ) ? sanitize_text_field( $_POST[ 'prop_storm_discharge' ] ) : '';
        $prop_sewer_location            = isset( $_POST[ 'prop_sewer_location' ] ) ? sanitize_text_field( $_POST[ 'prop_sewer_location' ] ) : '';
        $prop_pre_1911                  = isset( $_POST[ 'prop_pre_1911' ] ) ? sanitize_text_field( $_POST[ 'prop_pre_1911' ] ) : '';
        $prop_pre_1911_file             = isset( $_FILES[ 'prop_pre_1911_file' ] ) ? wp_handle_upload( $_FILES[ 'prop_pre_1911_file' ], array( 'test_form' => false ) ) : '';
        $prop_heritage                  = isset( $_POST[ 'prop_heritage' ] ) ? sanitize_text_field( $_POST[ 'prop_heritage' ] ) : '';
        $prop_heritage_file             = isset( $_FILES[ 'prop_heritage_file' ] ) ? wp_handle_upload( $_FILES[ 'prop_heritage_file' ], array( 'test_form' => false ) ) : '';
        $prop_walk_dist                 = isset( $_POST[ 'prop_walk_dist' ] ) ? sanitize_text_field( $_POST[ 'prop_walk_dist' ] ) : '';
        $prop_listed_date               = isset( $_POST[ 'prop_listed_date' ] ) ? sanitize_text_field( $_POST[ 'prop_listed_date' ] ) : '';
        $prop_area_map                  = isset( $_POST[ 'prop_area_map' ] ) ? sanitize_text_field( $_POST[ 'prop_area_map' ] ) : '';
        $prop_pd_link                   = isset( $_POST[ 'prop_pd_link' ] ) ? sanitize_text_field( $_POST[ 'prop_pd_link' ] ) : '';
        $prop_countour_link             = isset( $_POST[ 'prop_countour_link' ] ) ? sanitize_text_field( $_POST[ 'prop_countour_link' ] ) : '';
        $prop_sewer_link                = isset( $_POST[ 'prop_sewer_link' ] ) ? sanitize_text_field( $_POST[ 'prop_sewer_link' ] ) : '';
        $prop_storm_link                = isset( $_POST[ 'prop_storm_link' ] ) ? sanitize_text_field( $_POST[ 'prop_storm_link' ] ) : '';
        $prop_river_flooding            = isset( $_POST[ 'prop_river_flooding' ] ) ? sanitize_text_field( $_POST[ 'prop_river_flooding' ] ) : '';
        $prop_creek_flooding            = isset( $_POST[ 'prop_creek_flooding' ] ) ? sanitize_text_field( $_POST[ 'prop_creek_flooding' ] ) : '';
        $prop_flow_flooding             = isset( $_POST[ 'prop_flow_flooding' ] ) ? sanitize_text_field( $_POST[ 'prop_flow_flooding' ] ) : '';
        $prop_floodwise                 = isset( $_POST[ 'prop_floodwise' ] ) ? sanitize_text_field( $_POST[ 'prop_floodwise' ] ) : '';
        $prop_wetlands                  = isset( $_POST[ 'prop_wetlands' ] ) ? sanitize_text_field( $_POST[ 'prop_wetlands' ] ) : '';
        $prop_1946_aerial               = isset( $_POST[ 'prop_1946_aerial' ] ) ? sanitize_text_field( $_POST[ 'prop_1946_aerial' ] ) : '';
        $prop_biodiversity              = isset( $_POST[ 'prop_biodiversity' ] ) ? sanitize_text_field( $_POST[ 'prop_biodiversity' ] ) : '';
        $prop_bushfire                  = isset( $_POST[ 'prop_bushfire' ] ) ? sanitize_text_field( $_POST[ 'prop_bushfire' ] ) : '';
        $prop_neighbour_plan_map        = isset( $_POST[ 'prop_neighbour_plan_map' ] ) ? sanitize_text_field( $_POST[ 'prop_neighbour_plan_map' ] ) : '';

        // Update the meta field in the database.
        update_post_meta( $post_id, 'prop_number', $prop_number );
        update_post_meta( $post_id, 'prop_street', $prop_street );
        update_post_meta( $post_id, 'prop_street_file', $prop_street_file['url'] );
        update_post_meta( $post_id, 'prop_suburb', $prop_suburb );
        update_post_meta( $post_id, 'prop_lot', $prop_lot );
        update_post_meta( $post_id, 'prop_lot_file', $prop_lot_file );
        update_post_meta( $post_id, 'prop_rpsp', $prop_rpsp );
        update_post_meta( $post_id, 'prop_rpsp_file', $prop_rpsp_file );
        update_post_meta( $post_id, 'prop_status', $prop_status );
        update_post_meta( $post_id, 'prop_lprice', $prop_lprice );
        update_post_meta( $post_id, 'prop_agent_1', $prop_agent_1 );
        update_post_meta( $post_id, 'prop_agent_2', $prop_agent_2 );
        update_post_meta( $post_id, 'prop_agent_compamy', $prop_agent_compamy );
        update_post_meta( $post_id, 'prop_agent_1_phone', $prop_agent_1_phone );
        update_post_meta( $post_id, 'prop_agent_2_phone', $prop_agent_2_phone );
        update_post_meta( $post_id, 'prop_agent_1_email', $prop_agent_1_email );
        update_post_meta( $post_id, 'prop_agent_2_email', $prop_agent_2_email );
        update_post_meta( $post_id, 'prop_ad_link', $prop_ad_link );
        update_post_meta( $post_id, 'prop_config', $prop_config );
        update_post_meta( $post_id, 'prop_land_area', $prop_land_area );
        update_post_meta( $post_id, 'prop_frontage', $prop_frontage );
        update_post_meta( $post_id, 'prop_zoning', $prop_zoning );
        update_post_meta( $post_id, 'prop_assessable_dev_options', $prop_assessable_dev_options );
        update_post_meta( $post_id, 'prop_dev_approvals', $prop_dev_approvals );
        update_post_meta( $post_id, 'prop_dev_constrains', $prop_dev_constrains );
        update_post_meta( $post_id, 'prop_asga', $prop_asga );
        update_post_meta( $post_id, 'prop_slope_direction', $prop_slope_direction );
        update_post_meta( $post_id, 'prop_neighbour_plan', $prop_neighbour_plan );
        update_post_meta( $post_id, 'prop_flooding', $prop_flooding );
        update_post_meta( $post_id, 'prop_demolition_control', $prop_demolition_control );
        update_post_meta( $post_id, 'prop_storm_discharge', $prop_storm_discharge );
        update_post_meta( $post_id, 'prop_sewer_location', $prop_sewer_location );
        update_post_meta( $post_id, 'prop_pre_1911', $prop_pre_1911 );
        update_post_meta( $post_id, 'prop_pre_1911_file', $prop_pre_1911_file );
        update_post_meta( $post_id, 'prop_heritage', $prop_heritage );
        update_post_meta( $post_id, 'prop_heritage_file', $prop_heritage_file );
        update_post_meta( $post_id, 'prop_walk_dist', $prop_walk_dist );
        update_post_meta( $post_id, 'prop_listed_date', $prop_listed_date );
        update_post_meta( $post_id, 'prop_area_map', $prop_area_map );
        update_post_meta( $post_id, 'prop_pd_link', $prop_pd_link );
        update_post_meta( $post_id, 'prop_countour_link', $prop_countour_link );
        update_post_meta( $post_id, 'prop_sewer_link', $prop_sewer_link );
        update_post_meta( $post_id, 'prop_storm_link', $prop_storm_link );
        update_post_meta( $post_id, 'prop_river_flooding', $prop_river_flooding );
        update_post_meta( $post_id, 'prop_creek_flooding', $prop_creek_flooding );
        update_post_meta( $post_id, 'prop_flow_flooding', $prop_flow_flooding );
        update_post_meta( $post_id, 'prop_floodwise', $prop_floodwise );
        update_post_meta( $post_id, 'prop_wetlands', $prop_wetlands );
        update_post_meta( $post_id, 'prop_1946_aerial', $prop_1946_aerial );
        update_post_meta( $post_id, 'prop_biodiversity', $prop_biodiversity );
        update_post_meta( $post_id, 'prop_bushfire', $prop_bushfire );
        update_post_meta( $post_id, 'prop_neighbour_plan_map', $prop_neighbour_plan_map );

    }

    function update_edit_form() {
        echo ' enctype="multipart/form-data"';
    } // end update_edit_form

}

new Properties_Meta_Box;