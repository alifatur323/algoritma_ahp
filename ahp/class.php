<?php
$mysqli = new mysqli("localhost", "trainit_utama", "Kmzwa8awaa", "trainit_algoritma_ahp");

error_reporting(0);

class utama
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
}

class alternatif extends utama
{
	function tampil()
	{
		$ambil = $this->koneksi->query("SELECT * FROM alternatif");
		while ($pecah = $ambil->fetch_assoc())
		{
			$data[] = $pecah;
		}
		return $data;
	}

	function ambil($id_alternatif)
	{
		$ambil = $this->koneksi->query("SELECT * FROM alternatif WHERE id_alternatif='$id_alternatif'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}
}
$alternatif = new alternatif($mysqli);

class alternatif_nilai extends utama
{
	function tampil($id_alternatif, $id_kriteria)
	{
		$pecah = array();
		$ambil = $this->koneksi->query("SELECT * FROM alternatif_nilai WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}

	function tambah($id_alternatif, $data)
	{
		foreach ($data as $id_kriteria => $nilai)
		{
			$ambil = $this->tampil($id_alternatif, $id_kriteria);
			if (empty($ambil))
			{
				$this->koneksi->query("INSERT INTO alternatif_nilai (id_alternatif,id_kriteria,nilai) VALUES ('$id_alternatif','$id_kriteria','$nilai')");
			}
			else
			{
				$this->koneksi->query("UPDATE alternatif_nilai SET nilai='$nilai' WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria'");
			}
		}
	}
}
$alternatif_nilai = new alternatif_nilai($mysqli);

class kriteria extends utama
{
	function tampil()
	{
		$ambil = $this->koneksi->query("SELECT * FROM kriteria");
		while ($pecah = $ambil->fetch_assoc())
		{
			$data[] = $pecah;
		}
		return $data;
	}

	function ambil($id_kriteria)
	{
		$ambil = $this->koneksi->query("SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}

	function tambah($kode_kriteria, $nama_kriteria)
	{
		$this->koneksi->query("INSERT INTO kriteria (kode_kriteria,nama_kriteria) VALUES ('$kode_kriteria','$nama_kriteria')");
	}

	function hapus($id_kriteria)
	{
		$ambil = $this->koneksi->query("SELECT * FROM kriteria_bobot WHERE id_ka='$id_kriteria' OR id_kb='$id_kriteria'");
		while ($pecah = $ambil->fetch_assoc())
		{
			$idkb = $pecah['id_kriteria_bobot'];
			$this->koneksi->query("DELETE FROM kriteria_bobot WHERE id_kriteria_bobot='$idkb'");
		}
		$this->koneksi->query("DELETE FROM kriteria WHERE id_kriteria='$id_kriteria'");
	}
}
$kriteria = new kriteria($mysqli);

class kriteria_bobot extends utama
{
	function tampil($kriteria1,$kriteria2)
	{
		$pecah = "";
		$ambil = $this->koneksi->query("SELECT * FROM kriteria_bobot WHERE id_ka='$kriteria1' AND id_kb='$kriteria2'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}	

	function tambah($data)
	{
		foreach ($data as $id_ka => $value)
		{
			foreach ($value as $id_kb => $jumlah_bobot)
			{
				$ambil = $this->tampil($id_ka, $id_kb);

				if (empty($ambil))
				{
					// Tambah Data Bobot
					$this->koneksi->query("INSERT INTO kriteria_bobot (id_ka,id_kb,jumlah_bobot) VALUES ('$id_ka','$id_kb','$jumlah_bobot')");
				}
				else
				{
					$this->koneksi->query("UPDATE kriteria_bobot SET jumlah_bobot='$jumlah_bobot' WHERE id_ka='$id_ka' AND id_kb='$id_kb'");
				}

			}
		}
	}

	function tambah_otomatis($data)
	{
		foreach ($data as $id_ka => $value)
		{
			foreach ($value as $id_kb => $jumlah_bobot)
			{
				$ambil = $this->tampil($id_ka, $id_kb);

				if (empty($ambil))
				{
					// Tambah Data Bobot
					$this->koneksi->query("INSERT INTO kriteria_bobot (id_ka,id_kb,jumlah_bobot) VALUES ('$id_ka','$id_kb','$jumlah_bobot')");
				}
				else
				{
					$this->koneksi->query("UPDATE kriteria_bobot SET jumlah_bobot='$jumlah_bobot' WHERE id_ka='$id_ka' AND id_kb='$id_kb'");
				}


				// Menghitung bobot otomatis
				$ambil_otomatis = $this->tampil($id_kb, $id_ka);
				$bobot_otomatis = 1 / $jumlah_bobot;
				if (empty($ambil_otomatis))
				{
					// Tambah Data Bobot
					$this->koneksi->query("INSERT INTO kriteria_bobot (id_ka,id_kb,jumlah_bobot) VALUES ('$id_kb','$id_ka','$bobot_otomatis')");
				}
				else
				{
					$this->koneksi->query("UPDATE kriteria_bobot SET jumlah_bobot='$bobot_otomatis' WHERE id_ka='$id_kb' AND id_kb='$id_ka'");
				}
			}	
		}
	}

	function jumlah_perbaris($id_kb)
	{
		$ambil = $this->koneksi->query("SELECT SUM(jumlah_bobot) as jumlah_bobot FROM kriteria_bobot WHERE id_kb='$id_kb'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}
}
$kriteria_bobot = new kriteria_bobot($mysqli);

class prioritas
{
	function simpan_prioritas()
	{
		return "DATA";
	}
}
$prioritas = new prioritas($mysqli);

function index_random($jumlah_kriteria)
{	
	if ($jumlah_kriteria == 1)
	{
		return $ir = 0.00;
	}
	elseif ($jumlah_kriteria == 2)
	{
		return $ir = 0.00;
	}
	elseif ($jumlah_kriteria == 3)
	{
		return $ir = 0.58;
	}
	elseif ($jumlah_kriteria == 4)
	{
		return $ir = 0.90;
	}
	elseif ($jumlah_kriteria == 5)
	{
		return $ir = 1.12;
	}
}

class subkriteria extends utama
{
	function tampil()
	{
		$ambil = $this->koneksi->query("SELECT * FROM subkriteria");
		while ($pecah = $ambil->fetch_assoc())
		{
			$data[] = $pecah;
		}
		return $data;
	}
}
$subkriteria = new subkriteria($mysqli);

class subkriteria_bobot extends utama
{
	function tampil($subkriteria1,$subkriteria2)
	{
		$pecah = "";
		$ambil = $this->koneksi->query("SELECT * FROM subkriteria_bobot WHERE id_ska='$subkriteria1' AND id_skb='$subkriteria2'");
		$pecah = $ambil->fetch_assoc();
		return $pecah;
	}	
}
$subkriteria_bobot = new subkriteria_bobot($mysqli);
?>