function kali() 
{
	var x = document.formku.x.value;
	var y = document.formku.y.value;
	var hasil = x * y;
	document.formku.hasil.value = hasil;
}
function bagi() 
{
	var x = document.formku.x.value;
	var y = document.formku.y.value;
	var hasil = x / y;
	document.formku.hasil.value = hasil;
}
function tambah() 
{
	var x = parseFloat(document.formku.x.value);
	var y = parseFloat(document.formku.y.value);
	var hasil = x + y;
	document.formku.hasil.value = hasil;
}
function kurang() 
{
	var x = document.formku.x.value;
	var y = document.formku.y.value;
	var hasil = x - y;
	document.formku.hasil.value = hasil;
}

function indeks()
{
	var tugas = document.formku2.tugas.value;
	var uts = document.formku2.uts.value;
	var uas = document.formku2.uas.value;
	var akhir = 0.3*tugas + 0.35*uts + 0.35*uas;
	document.formku2.akhir.value = akhir;
	if(akhir>=90 && akhir<=100)
		{document.formku2.indeks_nilai.value="A"}
	else if(akhir>=75 && akhir<90)
		{document.formku2.indeks_nilai.value="B"}
	else if(akhir>=60 && akhir<75)
		{document.formku2.indeks_nilai.value="C"}
	else if(akhir>=0 && akhir<60)
		{document.formku2.indeks_nilai.value="D"}
	else
		{document.formku2.indeks_nilai.value="input salah" ;}
	
	

}

function bmi_app()
{
	var tinggi = document.formku3.tinggi.value;
	var berat = document.formku3.berat.value;
	var bmi = berat / ((tinggi/100)*(tinggi/100));
	document.formku3.bmi.value = bmi;
	if(bmi>=0 && bmi<18.5)
		{alert("tipe badan kurus");}
	 else if(bmi>=18.5 && bmi<25)
		{alert("tipe badan normal");}
	else if(bmi>=25 && bmi<30)
		{alert("tipe badan gemuk");}
	else if(bmi>=30)
		{alert("tipe badan obesitas");}
	else
		{alert("input salah");}

}

function rupiah(angka) {
    return "Rp " + angka.toLocaleString("id-ID");
}

function tiket() 
{
	var tujuan = document.formku4.tujuan.value;
	var qty = document.formku4.qty.value;
	if(tujuan=="Semarang")
		{var harga_satuan=1500000;}
	else if(tujuan=="Surabaya")
		{var harga_satuan=750000;}
   else if(tujuan=="Surakarta")
		{var harga_satuan=350000;}
	else if(tujuan=="makasar")
		{var harga_satuan=450000;}
	else if(tujuan=="jakarta")
		{var harga_satuan=500000;}
	else if(tujuan=="jambi")
		{var harga_satuan=600000;}
	else if(tujuan=="palembang")
		{var harga_satuan=400000;}
	else
		{var harga_satuan=0;}

	document.formku4.harga_satuan.value = rupiah (harga_satuan);

	var total_harga = harga_satuan * qty;
	document.formku4.total_harga.value = rupiah (total_harga);

	var ppn = 0.11 * total_harga;
	document.formku4.ppn.value = rupiah (ppn);

	var total_bayar = total_harga + ppn;
	document.formku4.total_bayar.value = rupiah(total_bayar);
} 


function zodiak()
{
	var bulan = document.formku5.bulan.value;
	var tanggal = document.formku5.tanggal.value;
	if( (bulan =="Mar" && tanggal>=21) || (bulan=="Apr" && tanggal<=19) )
		{alert("Aries");}
	else if( (bulan =="Apr" && tanggal>=21) || (bulan=="Mei" && tanggal<=20) )
		{alert("Taurus");}
	else if( (bulan =="Mei" && tanggal>=21) || (bulan=="Jun" && tanggal<=20) )
		{alert("Gemini");}
	else if( (bulan =="Jun" && tanggal>=21) || (bulan=="Jul" && tanggal<=22) )
		{alert("Cancer");}
	else if( (bulan =="Jul" && tanggal>=23) || (bulan=="Agu" && tanggal<=22) )
		{alert("Leo");}
	else if( (bulan =="Agu" && tanggal>=23) || (bulan=="Sep" && tanggal<=22) )
		{alert("Virgo");}
	else if( (bulan =="Sep" && tanggal>=23) || (bulan=="Okt" && tanggal<=22) )
		{alert("Libra");}
	else if( (bulan =="Okt" && tanggal>=23) || (bulan=="Nov" && tanggal<=21) )
		{alert("Scorpio");}
	else if( (bulan =="Nov" && tanggal>=22) || (bulan=="Des" && tanggal<=21) )
		{alert("Sagitarius");}
	else if( (bulan =="Des" && tanggal>=22) || (bulan=="Jan" && tanggal<=19) )
		{alert("Carpricon");}
	else if( (bulan =="Jan" && tanggal>=20) || (bulan=="Feb" && tanggal <=18) )
		{alert("Aquarius");}
	else if( (bulan =="Feb" && tanggal>=19) || (bulan=="Mar" && tanggal <=20) )
		{alert("Pisces");}
	else
		{alert("input salah");}
}