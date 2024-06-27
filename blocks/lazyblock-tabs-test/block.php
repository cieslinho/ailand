<section class="section tabs tabs-download">
    <div class="container">
        <p class="section-title">Do pobrania</p>
        <div class="tabs">
            <button id="techs" class="tabs-btn">Karty techniczne i deklaracje <svg width="15" height="24"
                    viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z"
                        fill="#231F20" />
                </svg>
            </button>
            <div class="subTabs">
                <div class="subTab">
                    <button id="komorowy" class="sub-tab">
                        Poliwęglan komorowy<svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="subTab__files">
                        <?php 
if (have_rows('file_repeater-1')) {
  while (have_rows('file_repeater-1')) {
    the_row();
    $file = get_sub_field('file_upload-1');
    ?>





                        <a class="subTab__link" href="<?php echo $file['url']; ?>">
                            <?php echo $file['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}
?>



                    </div>
                </div>
                <div class="subTab">
                    <button id="lity" class="sub-tab">
                        Poliwęglan lity<svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="subTab__files">
                        <?php 
if (have_rows('file_repeater-2')) {
  while (have_rows('file_repeater-2')) {
    the_row();
    $file1 = get_sub_field('file_upload-2');
    ?>





                        <a class="subTab__link" href="<?php echo $file1['url']; ?>">
                            <?php echo $file1['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}

?>



                    </div>
                </div>
                <div class="subTab">
                    <button id="HPL" class="sub-tab">
                       HPL<svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="subTab__files">
                        <?php 
if (have_rows('file_repeater-3')) {
  while (have_rows('file_repeater-3')) {
    the_row();
    $file2 = get_sub_field('file_upload-3');
    ?>





                        <a class="subTab__link" href="<?php echo $file2['url']; ?>">
                            <?php echo $file2['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}

?>



                    </div>
                </div>
                <div class="subTab">
                    <button id="XPS" class="sub-tab">
                    Pianka XPS z klejem<svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="subTab__files">
                        <?php 
if (have_rows('file_repeater-4')) {
  while (have_rows('file_repeater-4')) {
    the_row();
    $file3 = get_sub_field('file_upload-4');
    ?>





                        <a class="subTab__link" href="<?php echo $file3['url']; ?>">
                            <?php echo $file3['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}

?>



                    </div>
                </div>
                <div class="subTab">
                    <button id="slonina" class="sub-tab">
                    Polietylen “słonina”<svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H8L10 2H18C18.55 2 19.0208 2.19583 19.4125 2.5875C19.8042 2.97917 20 3.45 20 4V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="subTab__files">
                        <?php 
if (have_rows('file_repeater-5')) {
  while (have_rows('file_repeater-5')) {
    the_row();
    $file4 = get_sub_field('file_upload-4');
    ?>





                        <a class="subTab__link" href="<?php echo $file4['url']; ?>">
                            <?php echo $file4['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}

?>



                    </div>
                </div>
                



                    </div>
                </div>
                <button id="forms" class="tabs-btn">
                    Formularze i regulaminy<svg width="15" height="24"
                    viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z"
                        fill="#231F20" />
                </svg>
                    </button>
                    <div class="subTab__files subTab__files-forms">
                        <?php 
if (have_rows('file_repeater-6')) {
  while (have_rows('file_repeater-6')) {
    the_row();
    $file5 = get_sub_field('file_upload-5');
    ?>





                        <a class="subTab__link" href="<?php echo $file5['url']; ?>">
                            <?php echo $file5['title']; ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 18L4.5 10.5L6.6 8.325L10.5 12.225V0H13.5V12.225L17.4 8.325L19.5 10.5L12 18ZM3 24C2.175 24 1.46875 23.7063 0.88125 23.1188C0.29375 22.5312 0 21.825 0 21V16.5H3V21H21V16.5H24V21C24 21.825 23.7063 22.5312 23.1188 23.1188C22.5312 23.7063 21.825 24 21 24H3Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <?php 
  }
}

?>



                    </div>
            </div>







           

        </div>
</section>