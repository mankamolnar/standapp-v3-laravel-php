<?php

    namespace App;

    class CSSloader {
        public $offline_css_to_load;
        public $online_css_to_load;
        public $all_css;

        public function __construct() {
            $this->offline_css_to_load = array();
            $this->online_css_to_load = array();
            $this->all_css = array();

            $this->load_css_from_css_dir();
            $this->load_standards();
        }

        public function load_standards() {
            $this->online_css_to_load[] = "https://fonts.googleapis.com/css?family=Raleway:100,600";
        }

        public function load_css_from_css_dir() {
            if ($handle = opendir(app_path()."\..\public\css")) {
                while (false !== ($entry = readdir($handle))) {
                    if (trim($entry) != "." && trim($entry) != "..") {
                        $this->all_css[] = $entry;
                    }
                }

                closedir($handle);
            }
        }

        public function add_online_css($css_url) {
            $this->online_css_to_load[] = addslashes($css_url);
        }

        public function add_offline_css($css_filename) {
            $this->offline_css_to_load[] = addslashes($css_filename);
        }

        public function render_css_links($type = "normal", $timestamp = true) {
            $suffix = $this->generate_suffix($timestamp);

            if ($type == "normal") {
                $this->load_chosen_css($suffix);
                $this->load_online_css();

            } elseif ($type == "all") {
                $this->load_all_css($suffix);
                $this->load_online_css();

            } else {
                return False;

            }
        }

        public function load_all_css($suffix) {
            foreach ($this->all_css as $css) {
                echo "<link rel='stylesheet' type='text/css' href='/css/".$css."?".$suffix."' />";
            }
        }

        public function load_chosen_css($suffix) {
            foreach ($this->offline_css_to_load as $css) {
                echo "<link rel='stylesheet' type='text/css' href='/css/".$css."?".$suffix."' />";
            }
        }

        public function load_online_css() {
            foreach ($this->online_css_to_load as $css) {
                echo "<link rel='stylesheet' type='text/css' href='".addslashes($css)."' />";
            }
        }

        public function generate_suffix($timestamp) {
            $suffix = "0";
            if ($timestamp) {
                $suffix = date("YmdHis");
            }
            return $suffix;
        }
    }