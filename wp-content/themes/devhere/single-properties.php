<?php
$zoning = array('LDR'  => 'Low Density Residential', 'LMR1' => 'Low Medium Density Residential (2 Storeys)', 'LMR2' => 'Low Medium Density Residential (2 or 3 Storey Mix)', 'LMR3' => 'Low Medium Density Residential (3 Storeys)', 'CR1'  => 'Character Residential (Character', 'CR2'  => 'Character Residential (Infill Housing)', 'MDR'  => 'Medium Density Residential', 'HDR1' => 'High Density Residential (Up to 8 storeys)', 'HDR2' => 'High Density Residential (Up to 15 storeys)', 'EC'   => 'Emerging Community', 'TA'   => 'Tourist Accommodation', 'NC'   => 'Neighbourhood Centre', 'DC1'  => 'District Centre (District)', 'DC2'  => 'District Centre (Corridor)', 'MC'   => 'Major Centre', 'PC1'  => 'Principal Centre (City Centre)', 'PC2'  => 'Principal Centre (Regional Centre)', 'LII'  => 'Low impact Industry', 'IN1'  => 'General Industry A', 'IN2'  => 'General Industry B', 'IN3'  => 'General Industry C', 'SI'   => 'Special Industry', 'II'   => 'Industry Investigation', 'SR'   => 'Sport and Recreation', 'SR1'  => 'Sport and Recreation (Local)', 'SR2'  => 'Sport and Recreation (District)', 'SR3'  => 'Sport and Recreation (Metropolitan)', 'OS'   => 'Open Space', 'OS1'  => 'Open Space (Local)', 'OS2'  => 'Open Space (District)', 'OS3'  => 'Open Space (Metropolitan)', 'EM'   => 'Environmental Management', 'CN'   => 'Conservation', 'CN1'  => 'Conservation (Local)', 'CN2'  => 'Conservation (District)', 'CN3'  => 'Conservation (Metropolitan)', 'EI'   => 'Extractive Industry', 'MU1'  => 'Mixed use (Inner City)', 'MU2'  => 'Mixed use (Centre Frame)', 'MU3'  => 'Mixed use (Corridor)', 'RU'   => 'Rural', 'RR'   => 'Rural Residential', 'T'    => 'Township', 'CF1'  => 'Community Facilities (Major Health Care)', 'CF2'  => 'Community Facilities (Major Sports Venue)', 'CF3'  => 'Community Facilities (Cemetery)', 'CF4'  => 'Community Facilities (Community Purposes)', 'CF5'  => 'Community Facilities (Education Purposes)', 'CF6'  => 'Community Facilities (Emergency Services)', 'CF7'  => 'Community Facilities (Health Care Purposes)', 'SC1'  => 'Specialised Centre (Major Education and Research Facility)', 'SC2'  => 'Specialised Centre (Entertainment and Conference Centre)', 'SC3'  => 'Specialised Centre (Brisbane Markets)', 'SC4'  => 'Specialised Centre (Large Format Retail)', 'SC5'  => 'Specialised Centre (Mixed Industry and Business)', 'SC6'  => 'Specialised Centre (Marina)', 'SP1'  => 'Special Purpose (Defence)', 'SP2'  => 'Special Purpose (Detention facility)', 'SP3'  => 'Special Purpose (Transport infrastructure)', 'SP4'  => 'Special Purpose (Utility Services)', 'SP5'  => 'Special Purpose (Airport)', 'SP6'  => 'Special Purpose (Port)');
get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <?php ( get_the_ID() ); ?>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                    </article><!-- #post-## -->

                <?php
                    $prop_number                    = get_post_meta( get_the_ID(), 'prop_number', true );
                    $prop_street                    = get_post_meta( get_the_ID(), 'prop_street', true );
                    $prop_street_file               = get_post_meta( get_the_ID(), 'prop_street_file', true );
                    $prop_suburb                    = get_post_meta( get_the_ID(), 'prop_suburb', true );
                    $prop_lot                       = get_post_meta( get_the_ID(), 'prop_lot', true );
                    $prop_lot_file                  = get_post_meta( get_the_ID(), 'prop_lot_file', true );
                    $prop_rpsp                      = get_post_meta( get_the_ID(), 'prop_rpsp', true );
                    $prop_rpsp_file                 = get_post_meta( get_the_ID(), 'prop_rpsp_file', true );
                    $prop_status                    = get_post_meta( get_the_ID(), 'prop_status', true );
                    $prop_status_add                = get_post_meta( get_the_ID(), 'prop_status_add', true );
                    $prop_lprice                    = get_post_meta( get_the_ID(), 'prop_lprice', true );
                    $prop_agent_1                   = get_post_meta( get_the_ID(), 'prop_agent_1', true );
                    $prop_agent_2                   = get_post_meta( get_the_ID(), 'prop_agent_2', true );
                    $prop_agent_compamy             = get_post_meta( get_the_ID(), 'prop_agent_compamy', true );
                    $prop_agent_1_phone             = get_post_meta( get_the_ID(), 'prop_agent_1_phone', true );
                    $prop_agent_2_phone             = get_post_meta( get_the_ID(), 'prop_agent_2_phone', true );
                    $prop_agent_1_email             = get_post_meta( get_the_ID(), 'prop_agent_1_email', true );
                    $prop_agent_2_email             = get_post_meta( get_the_ID(), 'prop_agent_2_email', true );
                    $prop_ad_link                   = get_post_meta( get_the_ID(), 'prop_ad_link', true );
                    $prop_config                    = get_post_meta( get_the_ID(), 'prop_config', true );
                    $prop_config_add                = get_post_meta( get_the_ID(), 'prop_config_add', true );
                    $prop_land_area                 = get_post_meta( get_the_ID(), 'prop_land_area', true );
                    $prop_frontage                  = get_post_meta( get_the_ID(), 'prop_frontage', true );
                    $prop_zoning                    = get_post_meta( get_the_ID(), 'prop_zoning', true );
                    $prop_assessable_dev_options    = get_post_meta( get_the_ID(), 'prop_assessable_dev_options', true );
                    $prop_dev_approvals             = get_post_meta( get_the_ID(), 'prop_dev_approvals', true );
                    $prop_dev_constrains            = get_post_meta( get_the_ID(), 'prop_dev_constrains', true );
                    $prop_asga                      = get_post_meta( get_the_ID(), 'prop_asga', true );
                    $prop_slope_direction           = get_post_meta( get_the_ID(), 'prop_slope_direction', true );
                    $prop_slope_direction_add       = get_post_meta( get_the_ID(), '$prop_slope_direction_add', true );
                    $prop_neighbour_plan            = get_post_meta( get_the_ID(), 'prop_neighbour_plan', true );
                    $prop_flooding                  = get_post_meta( get_the_ID(), 'prop_flooding', true );
                    $prop_demolition_control        = get_post_meta( get_the_ID(), 'prop_demolition_control', true );
                    $prop_storm_discharge           = get_post_meta( get_the_ID(), 'prop_storm_discharge', true );
                    $prop_sewer_location            = get_post_meta( get_the_ID(), 'prop_sewer_location', true );
                    $prop_pre_1911                  = get_post_meta( get_the_ID(), 'prop_pre_1911', true );
                    $prop_heritage                  = get_post_meta( get_the_ID(), 'prop_heritage', true );
                    $prop_walk_dist                 = get_post_meta( get_the_ID(), 'prop_walk_dist', true );
                    $prop_listed_date               = get_post_meta( get_the_ID(), 'prop_listed_date', true );
                    $prop_area_map                  = get_post_meta( get_the_ID(), 'prop_area_map', true );
                    $prop_pd_link                   = get_post_meta( get_the_ID(), 'prop_pd_link', true );
                    $prop_countour_link             = get_post_meta( get_the_ID(), 'prop_countour_link', true );
                    $prop_sewer_link                = get_post_meta( get_the_ID(), 'prop_sewer_link', true );
                    $prop_storm_link                = get_post_meta( get_the_ID(), 'prop_storm_link', true );
                    $prop_river_flooding            = get_post_meta( get_the_ID(), 'prop_river_flooding', true );
                    $prop_creek_flooding            = get_post_meta( get_the_ID(), 'prop_creek_flooding', true );
                    $prop_flow_flooding             = get_post_meta( get_the_ID(), 'prop_flow_flooding', true );
                    $prop_floodwise                 = get_post_meta( get_the_ID(), 'prop_floodwise', true );
                    $prop_wetlands                  = get_post_meta( get_the_ID(), 'prop_wetlands', true );
                    $prop_1946_aerial               = get_post_meta( get_the_ID(), 'prop_1946_aerial', true );
                    $prop_biodiversity              = get_post_meta( get_the_ID(), 'prop_biodiversity', true );
                    $prop_bushfire                  = get_post_meta( get_the_ID(), 'prop_bushfire', true );
                    $prop_neighbour_plan_map        = get_post_meta( get_the_ID(), 'prop_neighbour_plan_map', true ); ?>
                    <article>
                        <table style="border: 1px solid black">
                            <tr><td>Number</td><td><?php echo $prop_number ?></td></tr>
                            <tr><td>Street</td><td><?php echo (!empty($prop_street_file)) ? '<a href="' . $prop_street_file . '" target="_blank">Open Pdf</a>' : $prop_street; ?></td></tr>
                            <tr><td>Suburb</td><td><?php echo $prop_suburb ?></td></tr>
                            <tr><td>Lot #</td><td><?php echo (!empty($prop_lot_file)) ? '<a href="' . $prop_lot_file . '" target="_blank">Open Pdf</a>' : $prop_lot; ?></td></tr>
                            <tr><td>RP/SP</td><td><?php echo (!empty($prop_rpsp_file)) ? '<a href="' . $prop_rpsp_file . '" target="_blank">Open Pdf</a>' : $prop_rpsp; ?></td></tr>
                            <tr><td>Status</td><td><?php echo $prop_status ?></td></tr>
                            <tr><td>Listing Price</td><td><?php echo $prop_lprice ?></td></tr>
                            <tr><td>Agent Company</td><td><?php echo $prop_agent_compamy ?></td></tr>
                            <tr><td>Agent 1 Name</td><td><?php echo $prop_agent_1 ?></td></tr>
                            <tr><td>Agent 1 Phone</td><td><?php echo $prop_agent_1_phone ?></td></tr>
                            <tr><td>Agent 1 Email</td><td><?php echo $prop_agent_1_email ?></td></tr>
                            <tr><td>Agent 2 Name</td><td><?php echo $prop_agent_2 ?></td></tr>
                            <tr><td>Agent 2 Phone</td><td><?php echo $prop_agent_2_phone ?></td></tr>
                            <tr><td>Agent 2 Email</td><td><?php echo $prop_agent_2_email ?></td></tr>
                            <tr><td>Link to Ad</td><td><?php echo '<a href="' . $prop_ad_link . '"  target="_blank">' . $prop_ad_link . '</a>' ?></td></tr>
                            <tr><td>Lot Configuration</td><td><?php echo $prop_config ?></td></tr>
                            <tr><td>Land Area</td><td><?php echo $prop_land_area ?></td></tr>
                            <tr><td>Frontage</td><td><?php echo $prop_frontage ?></td></tr>
                            <tr><td>Zoning</td><td><?php foreach ($prop_zoning as $zone) echo $zoning[$zone] . ' '; ?></td></tr>
                            <tr><td>Code Assessable development options</td><td><?php foreach ($prop_assessable_dev_options as $options) echo $options .' '; ?></td></tr>
                            <tr><td>Development Approvals</td><td><?php echo $prop_dev_approvals ?></td></tr>
                            <tr><td>Potential development constraints</td><td><?php echo $prop_dev_constrains ?></td></tr>
                            <tr><td>Average slope gradient approx</td><td><?php echo $prop_asga ?></td></tr>
                            <tr><td>Slope direction</td><td><?php echo $prop_slope_direction ?></td></tr>
                            <tr><td>Neighbourhood Plan</td><td><?php echo $prop_neighbour_plan ?></td></tr>
                            <tr><td>Flooding</td><td><?php echo $prop_flooding ?></td></tr>
                            <tr><td>Demolition Control</td><td><?php echo $prop_demolition_control ?></td></tr>
                            <tr><td>Stormwater Discharge</td><td><?php echo $prop_storm_discharge ?></td></tr>
                            <tr><td>Sewer Location</td><td><?php echo $prop_sewer_location ?></td></tr>
                            <tr><td>Pre-1911 House</td><td><?php echo (!empty($prop_pre_1911_file)) ? '<a href="' . $prop_pre_1911_file . '" target="_blank">Open Pdf</a>' : $prop_pre_1911; ?></td></tr>
                            <tr><td>Heritage</td><td><?php echo (!empty($prop_heritage_file)) ? '<a href="' . $prop_heritage_file . '" target="_blank">Open Pdf</a>' : $prop_heritage; ?></td></tr>
                            <tr><td>Walking distance to train</td><td><?php echo $prop_walk_dist ?></td></tr>
                            <tr><td>Date Listed for Sale</td><td><?php echo $prop_listed_date ?></td></tr>
                            <tr><td>Aerial Map Link</td><td><?php echo '<a href="' . $prop_area_map . '"  target="_blank">' . $prop_area_map . '</a>' ?></td></tr>
                            <tr><td>PD Online link</td><td><?php echo '<a href="' . $prop_pd_link . '"  target="_blank">' . $prop_pd_link . '</a>' ?></td></tr>
                            <tr><td>Contour link</td><td><?php echo '<a href="' . $prop_countour_link . '"  target="_blank">' . $prop_countour_link . '</a>' ?></td></tr>
                            <tr><td>Sewer and water link</td><td><?php echo '<a href="' . $prop_sewer_link . '"  target="_blank">' . $prop_sewer_link . '</a>' ?></td></tr>
                            <tr><td>Stormwater link</td><td><?php echo '<a href="' . $prop_storm_link . '"  target="_blank">' . $prop_storm_link . '</a>' ?></td></tr>
                            <tr><td>River Flooding</td><td><?php echo $prop_river_flooding ?></td></tr>
                            <tr><td>Creek Flooding</td><td><?php echo $prop_creek_flooding ?></td></tr>
                            <tr><td>Overland Flow flooding</td><td><?php echo $prop_flow_flooding ?></td></tr>
                            <tr><td>FloodWise Property Report</td><td><?php echo $prop_floodwise ?></td></tr>
                            <tr><td>Wetlands</td><td><?php echo $prop_wetlands ?></td></tr>
                            <tr><td>1946 Aerial</td><td><?php echo $prop_1946_aerial ?></td></tr>
                            <tr><td>Biodiversity</td><td><?php echo $prop_biodiversity ?></td></tr>
                            <tr><td>Bushfire</td><td><?php echo $prop_bushfire ?></td></tr>
                            <tr><td>Neighbourhood plan map</td><td><?php echo $prop_neighbour_plan_map ?></td></tr>
                        </table>
                    </article>
                <?php
                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();