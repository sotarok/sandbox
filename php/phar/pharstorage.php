<?php
/**
 *
 */

class pharstore
{
    const COMPRESS    = 0x00;
    const NO_COMPRESS = 0x01;

    protected $driver = null;

    protected $file = null;
    protected $name = null;

    public function __construct($file, $flags = 0)
    {
        $this->name = $file;
        $this->file = __DIR__ . '/' . $file;

        $p = new Phar($this->file, Phar::CURRENT_AS_FILEINFO, $file);
        if (!$p->isWritable()) {
            throw new Exception("hoge");
        }

        $p->startBuffering();

        $this->driver = $p;
    }

    public function __destruct()
    {
        $this->driver->stopBuffering();
    }

    public function get($key)
    {
        $buffer = false;
        if ($this->driver->isBuffering()) {
            $driver->stopBuffering();
            $buffer = true;
        }
        $ret = unserialize(file_get_contents($this->driver[$key]));

        if ($buffer) {
            $this->driver->startBuffering();
        }

        return $ret;
    }

    public function set($key, $value)
    {
        $this->driver[$key] = serialize($value);
    }
}

