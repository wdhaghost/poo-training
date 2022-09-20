<?php
namespace App\Views;

class View {
        private string $filename;

        public function __construct(string $filename)
        {
            $this->filename=$filename;
        }
//file_get_contents()
    public function getFileContent():string|false{
        return file_get_contents($this->filename);
    }
}
?>