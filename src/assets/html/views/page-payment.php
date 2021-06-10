<?php
/*
Template Name: Оплата и доставка
Template Post Type: post, page, category
*/

get_header(); ?>

<?php dimox_breadcrumbs(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	$sidebar   = get_field( 'sidebar' );
	$gallery   = get_field( 'photo_gallery' );
	$gallery6x = get_field( 'photo_gallery_6x' ); ?>

<section class="wrapper payment">
    <div class="payment__wrapper">
        <h1 class="title payment__title"><?php the_title() ?></h1>
        <div class="payment__text"><?php the_content(); ?></div>
    </div>
    <div class="wrapper question payment__type">
        <div class="board question__board payment__board">
            <div class="question__item payment__item">
                <div class="question__img">
                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4645 47.7796C32.5268 46.9982 32 45.9384 32 44.8333V44H40V49H37C35.6739 49 34.4021 48.561 33.4645 47.7796Z"
                              fill="#FCE1D0"/>
                        <path d="M40 44V49H37C35.6739 49 34.4021 48.561 33.4645 47.7796C32.5268 46.9982 32 45.9384 32 44.8333V44"
                              stroke="#FF5500"/>
                        <path d="M24.3898 34.2472C25.2258 33.4486 26.3597 33 27.542 33C28.7244 33 29.8583 33.4486 30.6943 34.2472C31.5303 35.0457 32 36.1288 32 37.2581V66H13.0504V63.9093C13.0514 63.1862 12.8596 62.4747 12.4931 61.842L8.5612 55.0823C8.22578 54.5058 8.03517 53.8626 8.00442 53.2037C7.97367 52.5447 8.10361 51.888 8.384 51.2852L11.9392 43.6452L23 44.5L23.0841 37.2581C23.0841 36.1288 23.5538 35.0457 24.3898 34.2472Z"
                              fill="#FCE1D0"/>
                        <path d="M23 44.5L23.0841 37.2581C23.0841 36.1288 23.5538 35.0457 24.3898 34.2472C25.2258 33.4486 26.3597 33 27.542 33C28.7244 33 29.8583 33.4486 30.6943 34.2472C31.5303 35.0457 32 36.1288 32 37.2581V66H13.0504V63.9093C13.0514 63.1862 12.8596 62.4747 12.4931 61.842L8.5612 55.0823C8.22578 54.5058 8.03517 53.8626 8.00442 53.2037C7.97367 52.5447 8.10361 51.888 8.384 51.2852L11.9392 43.6452"
                              stroke="#FF5500"/>
                        <path d="M32.5 44H57.6296C60.0433 44 62 42.1038 62 39.7647V12.2353C62 9.89621 60.0433 8 57.6296 8H7.37037C4.95668 8 3 9.89621 3 12.2353V39.7647C3 42.1038 4.95668 44 7.37037 44H22.6681"
                              stroke="#2C415B"/>
                        <path d="M18.5938 22.4688H16.9062V19.0938H20.2812V20.7812C20.2812 21.2288 20.1035 21.658 19.787 21.9745C19.4705 22.291 19.0413 22.4688 18.5938 22.4688Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                        <path d="M12.0312 14.7188H15.9062V18.5938V22.4688H12.0312C11.5837 22.4688 11.1545 22.291 10.838 21.9745C10.5215 21.658 10.3438 21.2288 10.3438 20.7812V16.4062C10.3438 15.9587 10.5215 15.5295 10.838 15.213C11.1545 14.8965 11.5837 14.7188 12.0312 14.7188Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                        <path d="M20.2812 16.4062V18.0938H16.9062V14.7188H18.5938C19.0413 14.7188 19.4705 14.8965 19.787 15.213C20.1035 15.5295 20.2812 15.9587 20.2812 16.4062Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                        <path d="M66.2188 14.2188C66.2188 19.9832 61.5457 24.6562 55.7812 24.6562C50.0168 24.6562 45.3438 19.9832 45.3438 14.2188C45.3438 8.45428 50.0168 3.78125 55.7812 3.78125C61.5457 3.78125 66.2188 8.45428 66.2188 14.2188Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                        <path d="M60.5546 10.0866L53.594 17.0472L51.086 14.5393C50.8797 14.34 50.6034 14.2298 50.3167 14.2323C50.0299 14.2348 49.7556 14.3498 49.5528 14.5526C49.35 14.7554 49.235 15.0297 49.2325 15.3165C49.23 15.6032 49.3402 15.8795 49.5395 16.0858L52.8207 19.3671C53.0258 19.5721 53.304 19.6873 53.594 19.6873C53.884 19.6873 54.1622 19.5721 54.3673 19.3671L62.1012 11.6332C62.2056 11.5323 62.289 11.4116 62.3463 11.2781C62.4036 11.1447 62.4338 11.0012 62.435 10.8559C62.4363 10.7107 62.4086 10.5667 62.3536 10.4323C62.2986 10.2979 62.2174 10.1757 62.1147 10.073C62.012 9.97034 61.8899 9.88913 61.7555 9.83413C61.6211 9.77914 61.477 9.75146 61.3318 9.75273C61.1866 9.75399 61.0431 9.78416 60.9096 9.84148C60.7762 9.89881 60.6555 9.98213 60.5546 10.0866Z"
                              fill="#FF5500"/>
                        <path d="M9 37H20V38H9V37Z" fill="#A7A9AC"/>
                        <path d="M10 28H17V30H10V28Z" fill="#A7A9AC"/>
                        <path d="M21 28H28V30H21V28Z" fill="#A7A9AC"/>
                        <path d="M32 28H39V30H32V28Z" fill="#A7A9AC"/>
                        <path d="M43 28H50V30H43V28Z" fill="#A7A9AC"/>
                    </svg>
                </div>
                <div class="question__name">Картой Сбербанк</div>
            </div>
            <div class="question__item payment__item">
                <div class="question__img">
                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.693 9L58.6878 9.00027C58.6878 9.00027 6.32328 9.0012 6.31119 9.0012C6.28995 9.0012 6.27003 9.00293 6.24945 9.00387C3.34476 9.0372 1 11.4107 1 14.3351V15.3184C1.00053 15.1491 1.00903 15.6484 1.02244 15.4822C1.2645 18.2023 3.53928 20.3348 6.31119 20.3348C11.9529 20.3348 53.5 20.3337 58.693 20.3337C62.1706 20.3337 65 22.508 65 26V15.3332C65 11.841 62.1706 9 58.693 9Z"
                              fill="white" stroke="#2C415B"/>
                        <path d="M58.693 19.9968C58.6913 19.9968 58.6897 19.997 58.6878 19.997C58.6878 19.997 6.32364 19.998 6.31156 19.998C3.53966 19.998 1.26489 17.8016 1.02284 15C1.00903 15.1763 1 15.3541 1 15.534C1 15.5358 1.00013 15.5375 1.00013 15.5393V44.5435V51.2366V59.4771C1.00013 59.479 1.0004 59.4805 1.0004 59.4824C1.00319 63.0768 3.83138 66 7.30727 66H58.693C62.1703 66 64.9995 63.0744 65 59.4782C65 59.4779 65 59.4779 65 59.4776V54.8426V51.2379V26.5196C65 22.9229 62.1706 19.9968 58.693 19.9968Z"
                              fill="white" stroke="#2C415B"/>
                        <path d="M66.9434 33.9908H65.8936H60.2797H51.5138C51.5132 33.9908 51.5126 33.9909 51.5119 33.9909C51.4823 33.9909 51.4528 33.9926 51.4235 33.9952C51.3897 33.998 51.3565 34.0025 51.3239 34.0085C51.3199 34.0093 51.3158 34.0096 51.3118 34.0104C51.2847 34.0157 51.2581 34.0225 51.2319 34.0299C51.2264 34.0313 51.2208 34.0324 51.2153 34.034C51.1918 34.0409 51.1691 34.0493 51.1463 34.0577C51.1378 34.0609 51.1292 34.0635 51.1207 34.0668C51.1017 34.0745 51.0835 34.0833 51.0651 34.092C51.0532 34.0978 51.0408 34.1028 51.029 34.109C51.0151 34.1163 51.0015 34.1247 50.9879 34.1327C50.9725 34.1415 50.9569 34.15 50.9421 34.1598C50.9324 34.1662 50.9232 34.1734 50.9137 34.1801C50.896 34.1925 50.8782 34.2046 50.8612 34.2182C50.8542 34.2238 50.8479 34.2301 50.841 34.2358C50.8228 34.2513 50.8044 34.2666 50.7871 34.2835C50.7783 34.2919 50.7705 34.3013 50.762 34.3101C50.7471 34.3257 50.7319 34.3412 50.7179 34.3579C50.697 34.3826 50.6774 34.4083 50.6592 34.4349C50.6588 34.4353 50.6583 34.4358 50.6581 34.4363L45.1727 42.4406C45.1344 42.4964 45.102 42.5555 45.0764 42.617C45.0667 42.6399 45.0588 42.6633 45.051 42.6866C45.0487 42.6937 45.0457 42.7005 45.0435 42.7076C45.0358 42.7322 45.0299 42.7572 45.0243 42.782C45.0228 42.7885 45.0208 42.7949 45.0195 42.8013C45.0149 42.8238 45.0119 42.8463 45.0091 42.8689C45.0078 42.8785 45.0059 42.8881 45.0049 42.8978C45.003 42.9163 45.0026 42.9348 45.0019 42.9533C45.0012 42.9674 45 42.9816 45 42.9959C45 43.0096 45.0012 43.0233 45.0018 43.0371C45.0025 43.056 45.003 43.0751 45.0049 43.094C45.0059 43.1032 45.0077 43.1124 45.0089 43.1218C45.0119 43.1447 45.0149 43.1677 45.0196 43.1905C45.0208 43.1968 45.0228 43.2029 45.0243 43.2092C45.0299 43.2344 45.0359 43.2593 45.0436 43.2843C45.0458 43.2913 45.0488 43.2981 45.0512 43.3053C45.059 43.3286 45.0668 43.3519 45.0765 43.3748C45.1023 43.4363 45.1347 43.4954 45.1731 43.5513L50.6583 51.5544C50.6586 51.5548 50.6589 51.5551 50.6592 51.5555C50.6812 51.5874 50.7054 51.6178 50.7309 51.647C50.7393 51.6566 50.748 51.6656 50.7568 51.6748C50.7744 51.6933 50.7923 51.7112 50.8113 51.7284C50.8224 51.7385 50.8333 51.7484 50.8446 51.7579C50.8645 51.7745 50.8853 51.7902 50.9066 51.8054C50.9162 51.8122 50.9254 51.8196 50.9351 51.826C50.966 51.8465 50.9979 51.8653 51.031 51.8823C51.0393 51.8866 51.048 51.8902 51.0563 51.8942C51.0827 51.907 51.1095 51.9189 51.1371 51.9294C51.1478 51.9336 51.1585 51.9373 51.1693 51.9409C51.1955 51.95 51.2221 51.958 51.2493 51.965C51.2604 51.968 51.2714 51.9709 51.2826 51.9735C51.3105 51.9797 51.3387 51.9845 51.3674 51.9885C51.3778 51.99 51.3881 51.992 51.3985 51.9932C51.4339 51.9971 51.4698 51.9992 51.5063 51.9995C51.5092 51.9995 51.5121 52 51.5151 52C51.5156 52 51.5163 51.9999 51.517 51.9999H65.9149C67.616 51.9999 69 50.6536 69 48.9988V33.991V32C68.9942 33.1004 68.0759 33.9908 66.9434 33.9908Z"
                              fill="white" stroke="#2C415B"/>
                        <path d="M67 29H65.0005V31.4872C65.0005 31.4915 65 31.4957 65 31.5C65 31.5043 65.0005 31.5085 65.0005 31.5128V34H67C68.1045 34 69 32.8807 69 31.5C69 30.1193 68.1045 29 67 29Z"
                              fill="white" stroke="#2C415B"/>
                        <path d="M57.9668 16H6.03318C5.46259 16 5 15.3284 5 14.5C5 13.6716 5.46259 13 6.03318 13H57.9668C58.5374 13 59 13.6716 59 14.5C59 15.3284 58.5374 16 57.9668 16Z"
                              fill="#2C415B"/>
                        <path d="M56.6699 45.7103C55.0614 45.7103 53.752 44.4009 53.752 42.7924C53.752 41.1837 55.0614 39.8743 56.6699 39.8743C58.2784 39.8743 59.5879 41.1837 59.5879 42.7924C59.5879 44.4009 58.2784 45.7103 56.6699 45.7103Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                        <path d="M46.7282 15.4992H8.62684L11.0267 4.97426C11.0281 4.96926 11.03 4.9624 11.0321 4.9543C11.0334 4.94903 11.0345 4.94415 11.0355 4.93979C11.0372 4.93457 11.0394 4.92741 11.0419 4.91914L11.042 4.91874C11.047 4.90152 11.0496 4.89324 11.0513 4.88802C11.0536 4.88174 11.0565 4.87439 11.063 4.85775L11.0675 4.84678L11.0716 4.83672L11.0741 4.83078C11.0747 4.82946 11.0749 4.82891 11.0749 4.82894L11.0749 4.82893C11.0774 4.82354 11.0808 4.81669 11.0901 4.79861L11.0902 4.79844C11.0983 4.78277 11.1012 4.77728 11.103 4.7741C11.1066 4.7679 11.1117 4.75979 11.1211 4.74527L10.7008 4.47441M46.7282 15.4992L11.1364 4.72198L10.7269 4.43512L11.1365 4.72187M46.7282 15.4992L11.6848 4.52412C11.6794 4.52274 11.6722 4.52087 11.664 4.51848M46.7282 15.4992L11.592 4.50365C11.6042 4.50515 11.6099 4.50591 11.6132 4.50641C11.6142 4.50661 11.6157 4.50693 11.6178 4.50741L11.6371 4.51188C11.6374 4.51194 11.6376 4.51199 11.6378 4.51205C11.6379 4.51205 11.6379 4.51205 11.6379 4.51206C11.6448 4.51368 11.651 4.51504 11.6561 4.5161C11.6586 4.51688 11.6612 4.51767 11.664 4.51848M10.7008 4.47441C10.7021 4.47236 10.7034 4.47031 10.7048 4.46826C10.712 4.45712 10.7193 4.44601 10.7269 4.43511C10.7387 4.41831 10.7511 4.4024 10.7637 4.3865M10.7008 4.47441L11.1194 4.74782C11.1215 4.74465 11.1232 4.74193 11.1248 4.73957C11.1318 4.7288 11.134 4.72551 11.1365 4.72187M10.7008 4.47441C10.6902 4.49076 10.6798 4.50711 10.67 4.52406C10.6614 4.53906 10.6534 4.55451 10.6455 4.56996C10.637 4.58646 10.6285 4.60297 10.6207 4.61992C10.6144 4.63358 10.6088 4.64754 10.6031 4.66156C10.6017 4.66493 10.6003 4.6683 10.599 4.67167L10.5975 4.67523L11.1365 4.72187M10.7637 4.3865L11.1536 4.69952L11.1557 4.69689M10.7637 4.3865L11.1557 4.69689M10.7637 4.3865C10.7657 4.38399 10.7678 4.38146 10.7698 4.37894C10.7768 4.37018 10.7837 4.36144 10.791 4.35305C10.8046 4.33715 10.819 4.322 10.8334 4.307C10.8362 4.30413 10.839 4.30125 10.8418 4.29837L11.1931 4.65424M11.1557 4.69689C11.1434 4.71244 11.139 4.71825 11.1365 4.72187M11.1557 4.69689L11.1613 4.68986L11.1666 4.68326C11.1682 4.68126 11.1692 4.68013 11.1696 4.67961C11.1698 4.67941 11.1699 4.6793 11.1699 4.67927L11.1699 4.67921C11.174 4.67453 11.1799 4.66811 11.1931 4.65424M11.1931 4.65424L11.1992 4.64807L11.2052 4.64187C11.2064 4.64059 11.2072 4.63979 11.2077 4.63935C11.2137 4.63368 11.2214 4.62682 11.232 4.6179L11.2328 4.61718L11.2404 4.61071L11.2453 4.60663C11.2463 4.60574 11.2469 4.60524 11.2472 4.60504C11.2527 4.60071 11.2607 4.59482 11.2752 4.58478L11.2815 4.58051L11.2888 4.57546C11.2907 4.57413 11.2919 4.57331 11.2926 4.57284C11.2972 4.56998 11.3044 4.56575 11.3172 4.5586L11.3357 4.54849C11.3414 4.54575 11.3494 4.54213 11.3623 4.5365L11.3696 4.53341L11.3771 4.53026C11.3798 4.5291 11.3813 4.5285 11.3819 4.52824L11.3879 4.52614L11.4062 4.52028L11.416 4.51723L11.423 4.51509C11.4244 4.51465 11.4254 4.51436 11.426 4.51417C11.4297 4.51323 11.4367 4.51166 11.4519 4.50861L11.4628 4.50643L11.4698 4.50502C11.4708 4.50482 11.4715 4.50469 11.4719 4.50462C11.4719 4.50462 11.4719 4.50462 11.4719 4.50462C11.474 4.50428 11.4798 4.50352 11.4978 4.50185L11.5071 4.50103L11.515 4.50033C11.5166 4.50019 11.5175 4.50015 11.5177 4.50013L11.5177 4.50011L11.1931 4.65424ZM11.664 4.51848C11.6635 4.51833 11.663 4.51818 11.6625 4.51802L11.6626 4.51745M11.664 4.51848C11.6645 4.51863 11.665 4.51877 11.6656 4.51892L11.6658 4.51808M11.6626 4.51745C11.6627 4.51747 11.6628 4.51749 11.6629 4.51751L11.6658 4.51808M11.6626 4.51745L11.6627 4.5171L11.6626 4.51745ZM11.6658 4.51808L11.6704 4.51899L11.6708 4.51907M11.6658 4.51808L11.6659 4.51786C11.6678 4.51832 11.6694 4.51869 11.6707 4.51897C11.6708 4.51898 11.6708 4.51899 11.6709 4.519M11.6708 4.51907L11.6709 4.519M11.6708 4.51907L11.6742 4.51972C11.6758 4.52003 11.674 4.51969 11.6709 4.519M11.6708 4.51907L11.6709 4.519M11.6245 4.50548L11.6248 4.50558L11.6245 4.50548ZM11.0405 4.91491C11.0406 4.91454 11.0406 4.91462 11.0405 4.91506L11.0405 4.91491ZM11.0231 4.98627C11.023 4.98667 11.023 4.98673 11.0231 4.98635L11.0231 4.98627ZM11.4718 4.50463C11.4716 4.50466 11.4714 4.5047 11.471 4.50475L11.4718 4.50463Z"
                              fill="#FCE1D0" stroke="#FF5500"/>
                    </svg>
                </div>
                <div class="question__name">Наличными</div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>



<?php unset( $sidebar );
unset( $menu );
unset( $gallery );
?>
<?php get_footer(); ?>