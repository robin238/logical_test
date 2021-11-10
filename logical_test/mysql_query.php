SELECT tb_mahasiswa.mhs_nama
FROM tb_mahasiswa
JOIN tb_mahasiswa_nilai ON tb_mahasiswa_nilai.mhs_id=tb_mahasiswa.mhs_id
JOIN tb_matakuliah ON tb_matakuliah.mk_id=tb_mahasiswa_nilai.mk_id
where tb_matakuliah.mk_kode=="MK303" and MAX(tb_mahasiswa_nilai.nilai);