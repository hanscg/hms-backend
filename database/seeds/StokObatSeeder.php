<?php

use Illuminate\Database\Seeder;

class StokObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stok_obat')->insert(array(
        	array('id_jenis_obat'=>1, 'nomor_batch'=>'PXHW96A', 'jumlah'=>145, 'kadaluarsa'=>'2018-01-27', 'barcode'=>'00001PXHW96A20180127', 'lokasi'=>1),
			array('id_jenis_obat'=>2, 'nomor_batch'=>'FSB7DK', 'jumlah'=>95, 'kadaluarsa'=>'2018-02-24', 'barcode'=>'00002FSB7DK20180224', 'lokasi'=>1),
			array('id_jenis_obat'=>3, 'nomor_batch'=>'3SQOJ8', 'jumlah'=>295, 'kadaluarsa'=>'2018-03-07', 'barcode'=>'000033SQOJ820180307', 'lokasi'=>1),
			array('id_jenis_obat'=>4, 'nomor_batch'=>'GQ8RA2', 'jumlah'=>395, 'kadaluarsa'=>'2018-03-28', 'barcode'=>'00004GQ8RA220180328', 'lokasi'=>1),
			array('id_jenis_obat'=>5, 'nomor_batch'=>'HOL90N28M', 'jumlah'=>315, 'kadaluarsa'=>'2018-05-19', 'barcode'=>'00005HOL90N28M20180519', 'lokasi'=>1),
			array('id_jenis_obat'=>6, 'nomor_batch'=>'XWCHVLN7', 'jumlah'=>245, 'kadaluarsa'=>'2018-06-16', 'barcode'=>'00006XWCHVLN720180616', 'lokasi'=>1),
			array('id_jenis_obat'=>7, 'nomor_batch'=>'NT8WWU70C', 'jumlah'=>395, 'kadaluarsa'=>'2018-06-29', 'barcode'=>'00007NT8WWU70C20180629', 'lokasi'=>1),
			array('id_jenis_obat'=>8, 'nomor_batch'=>'9OOGG9L', 'jumlah'=>90, 'kadaluarsa'=>'2018-06-30', 'barcode'=>'000089OOGG9L20180630', 'lokasi'=>1),
			array('id_jenis_obat'=>9, 'nomor_batch'=>'YVQPQ6I', 'jumlah'=>200, 'kadaluarsa'=>'2018-07-07', 'barcode'=>'00009YVQPQ6I20180707', 'lokasi'=>1),
			array('id_jenis_obat'=>10, 'nomor_batch'=>'ABJAUL6', 'jumlah'=>300, 'kadaluarsa'=>'2018-07-11', 'barcode'=>'00010ABJAUL620180711', 'lokasi'=>1),
			array('id_jenis_obat'=>11, 'nomor_batch'=>'SJ9ET1IEU', 'jumlah'=>20, 'kadaluarsa'=>'2018-08-01', 'barcode'=>'00011SJ9ET1IEU20180801', 'lokasi'=>1),
			array('id_jenis_obat'=>12, 'nomor_batch'=>'INLCG1220', 'jumlah'=>300, 'kadaluarsa'=>'2018-08-05', 'barcode'=>'00012INLCG122020180805', 'lokasi'=>1),
			array('id_jenis_obat'=>13, 'nomor_batch'=>'40S5PIYO', 'jumlah'=>10, 'kadaluarsa'=>'2018-08-09', 'barcode'=>'0001340S5PIYO20180809', 'lokasi'=>1),
			array('id_jenis_obat'=>14, 'nomor_batch'=>'VFOZ256M', 'jumlah'=>300, 'kadaluarsa'=>'2018-08-26', 'barcode'=>'00014VFOZ256M20180826', 'lokasi'=>1),
			array('id_jenis_obat'=>15, 'nomor_batch'=>'8JDZ2OZEII', 'jumlah'=>150, 'kadaluarsa'=>'2018-09-11', 'barcode'=>'000158JDZ2OZEII20180911', 'lokasi'=>1),
			array('id_jenis_obat'=>16, 'nomor_batch'=>'KKKFXL0', 'jumlah'=>150, 'kadaluarsa'=>'2018-10-05', 'barcode'=>'00016KKKFXL020181005', 'lokasi'=>1),
			array('id_jenis_obat'=>17, 'nomor_batch'=>'LAOSLK8CGF', 'jumlah'=>400, 'kadaluarsa'=>'2018-10-16', 'barcode'=>'00017LAOSLK8CGF20181016', 'lokasi'=>1),
			array('id_jenis_obat'=>18, 'nomor_batch'=>'ASKVSQAJ05', 'jumlah'=>250, 'kadaluarsa'=>'2018-10-18', 'barcode'=>'00018ASKVSQAJ0520181018', 'lokasi'=>1),
			array('id_jenis_obat'=>19, 'nomor_batch'=>'V10YO5GHZX', 'jumlah'=>300, 'kadaluarsa'=>'2018-10-30', 'barcode'=>'00019V10YO5GHZX20181030', 'lokasi'=>1),
			array('id_jenis_obat'=>20, 'nomor_batch'=>'MNHB97H', 'jumlah'=>40, 'kadaluarsa'=>'2019-01-18', 'barcode'=>'00020MNHB97H20190118', 'lokasi'=>1),
			array('id_jenis_obat'=>21, 'nomor_batch'=>'NN2FYW', 'jumlah'=>150, 'kadaluarsa'=>'2019-03-11', 'barcode'=>'00021NN2FYW20190311', 'lokasi'=>1),
			array('id_jenis_obat'=>22, 'nomor_batch'=>'EJXTY0QS6S', 'jumlah'=>210, 'kadaluarsa'=>'2019-04-23', 'barcode'=>'00022EJXTY0QS6S20190423', 'lokasi'=>1),
			array('id_jenis_obat'=>23, 'nomor_batch'=>'3ISW5F3', 'jumlah'=>250, 'kadaluarsa'=>'2019-05-07', 'barcode'=>'000233ISW5F320190507', 'lokasi'=>1),
			array('id_jenis_obat'=>24, 'nomor_batch'=>'A9B3QZ', 'jumlah'=>440, 'kadaluarsa'=>'2019-05-25', 'barcode'=>'00024A9B3QZ20190525', 'lokasi'=>1),
			array('id_jenis_obat'=>25, 'nomor_batch'=>'T7V1DCIY3T', 'jumlah'=>420, 'kadaluarsa'=>'2019-06-06', 'barcode'=>'00025T7V1DCIY3T20190606', 'lokasi'=>1),
			array('id_jenis_obat'=>26, 'nomor_batch'=>'50VVMKOQEQ', 'jumlah'=>270, 'kadaluarsa'=>'2018-02-14', 'barcode'=>'0002650VVMKOQEQ20180214', 'lokasi'=>1),
			array('id_jenis_obat'=>27, 'nomor_batch'=>'U598JJJC', 'jumlah'=>500, 'kadaluarsa'=>'2018-03-01', 'barcode'=>'00027U598JJJC20180301', 'lokasi'=>1),
			array('id_jenis_obat'=>28, 'nomor_batch'=>'1ECTO85', 'jumlah'=>310, 'kadaluarsa'=>'2018-03-15', 'barcode'=>'000281ECTO8520180315', 'lokasi'=>1),
			array('id_jenis_obat'=>29, 'nomor_batch'=>'NL7PRNPBU', 'jumlah'=>260, 'kadaluarsa'=>'2018-03-20', 'barcode'=>'00029NL7PRNPBU20180320', 'lokasi'=>1),
			array('id_jenis_obat'=>30, 'nomor_batch'=>'552O2H2', 'jumlah'=>500, 'kadaluarsa'=>'2018-03-27', 'barcode'=>'00030552O2H220180327', 'lokasi'=>1),
			array('id_jenis_obat'=>31, 'nomor_batch'=>'SIVP4N', 'jumlah'=>160, 'kadaluarsa'=>'2018-03-28', 'barcode'=>'00031SIVP4N20180328', 'lokasi'=>1),
			array('id_jenis_obat'=>32, 'nomor_batch'=>'7PZCAJ44M', 'jumlah'=>180, 'kadaluarsa'=>'2018-03-29', 'barcode'=>'000327PZCAJ44M20180329', 'lokasi'=>1),
			array('id_jenis_obat'=>33, 'nomor_batch'=>'3NRX59H8', 'jumlah'=>380, 'kadaluarsa'=>'2018-05-29', 'barcode'=>'000333NRX59H820180529', 'lokasi'=>1),
			array('id_jenis_obat'=>34, 'nomor_batch'=>'T718J8U', 'jumlah'=>390, 'kadaluarsa'=>'2018-06-05', 'barcode'=>'00034T718J8U20180605', 'lokasi'=>1),
			array('id_jenis_obat'=>35, 'nomor_batch'=>'EMOSJP1ZU', 'jumlah'=>440, 'kadaluarsa'=>'2018-06-21', 'barcode'=>'00035EMOSJP1ZU20180621', 'lokasi'=>1),
			array('id_jenis_obat'=>36, 'nomor_batch'=>'QGN8LED', 'jumlah'=>210, 'kadaluarsa'=>'2018-07-25', 'barcode'=>'00036QGN8LED20180725', 'lokasi'=>1),
			array('id_jenis_obat'=>37, 'nomor_batch'=>'KDHBI6Q3MK', 'jumlah'=>280, 'kadaluarsa'=>'2018-08-11', 'barcode'=>'00037KDHBI6Q3MK20180811', 'lokasi'=>1),
			array('id_jenis_obat'=>38, 'nomor_batch'=>'ZUZCU1G', 'jumlah'=>460, 'kadaluarsa'=>'2018-09-10', 'barcode'=>'00038ZUZCU1G20180910', 'lokasi'=>1),
			array('id_jenis_obat'=>39, 'nomor_batch'=>'IYRUREO2', 'jumlah'=>250, 'kadaluarsa'=>'2018-10-02', 'barcode'=>'00039IYRUREO220181002', 'lokasi'=>1),
			array('id_jenis_obat'=>40, 'nomor_batch'=>'DEL27E2', 'jumlah'=>230, 'kadaluarsa'=>'2018-10-31', 'barcode'=>'00040DEL27E220181031', 'lokasi'=>1),
			array('id_jenis_obat'=>41, 'nomor_batch'=>'DPU97U7', 'jumlah'=>270, 'kadaluarsa'=>'2018-12-26', 'barcode'=>'00041DPU97U720181226', 'lokasi'=>1),
			array('id_jenis_obat'=>42, 'nomor_batch'=>'4ROOU00ZNW', 'jumlah'=>360, 'kadaluarsa'=>'2019-01-04', 'barcode'=>'000424ROOU00ZNW20190104', 'lokasi'=>1),
			array('id_jenis_obat'=>43, 'nomor_batch'=>'CXPQVSA', 'jumlah'=>470, 'kadaluarsa'=>'2019-02-24', 'barcode'=>'00043CXPQVSA20190224', 'lokasi'=>1),
			array('id_jenis_obat'=>44, 'nomor_batch'=>'J225SB5PA3', 'jumlah'=>120, 'kadaluarsa'=>'2019-02-25', 'barcode'=>'00044J225SB5PA320190225', 'lokasi'=>1),
			array('id_jenis_obat'=>45, 'nomor_batch'=>'58P7GDUQ', 'jumlah'=>30, 'kadaluarsa'=>'2019-03-13', 'barcode'=>'0004558P7GDUQ20190313', 'lokasi'=>1),
			array('id_jenis_obat'=>46, 'nomor_batch'=>'VRA0UHY', 'jumlah'=>250, 'kadaluarsa'=>'2019-04-17', 'barcode'=>'00046VRA0UHY20190417', 'lokasi'=>1),
			array('id_jenis_obat'=>47, 'nomor_batch'=>'9JWKYOHCV', 'jumlah'=>420, 'kadaluarsa'=>'2019-05-17', 'barcode'=>'000479JWKYOHCV20190517', 'lokasi'=>1),
			array('id_jenis_obat'=>48, 'nomor_batch'=>'04ERRD1H', 'jumlah'=>470, 'kadaluarsa'=>'2019-05-21', 'barcode'=>'0004804ERRD1H20190521', 'lokasi'=>1),
			array('id_jenis_obat'=>49, 'nomor_batch'=>'RIX3IFE', 'jumlah'=>60, 'kadaluarsa'=>'2019-06-04', 'barcode'=>'00049RIX3IFE20190604', 'lokasi'=>1),
			array('id_jenis_obat'=>50, 'nomor_batch'=>'4WZ0GWQ', 'jumlah'=>100, 'kadaluarsa'=>'2019-06-08', 'barcode'=>'000504WZ0GWQ20190608', 'lokasi'=>1),
			array('id_jenis_obat'=>51, 'nomor_batch'=>'WJB4APVPI', 'jumlah'=>260, 'kadaluarsa'=>'2018-02-10', 'barcode'=>'00051WJB4APVPI20180210', 'lokasi'=>1),
			array('id_jenis_obat'=>52, 'nomor_batch'=>'9M593OV0T', 'jumlah'=>20, 'kadaluarsa'=>'2018-02-27', 'barcode'=>'000529M593OV0T20180227', 'lokasi'=>1),
			array('id_jenis_obat'=>53, 'nomor_batch'=>'RF586WOPI', 'jumlah'=>170, 'kadaluarsa'=>'2018-03-06', 'barcode'=>'00053RF586WOPI20180306', 'lokasi'=>1),
			array('id_jenis_obat'=>54, 'nomor_batch'=>'ZMA66D3Y0', 'jumlah'=>100, 'kadaluarsa'=>'2018-03-11', 'barcode'=>'00054ZMA66D3Y020180311', 'lokasi'=>1),
			array('id_jenis_obat'=>55, 'nomor_batch'=>'QZZT64', 'jumlah'=>380, 'kadaluarsa'=>'2018-03-21', 'barcode'=>'00055QZZT6420180321', 'lokasi'=>1),
			array('id_jenis_obat'=>56, 'nomor_batch'=>'2CVROU', 'jumlah'=>410, 'kadaluarsa'=>'2018-04-30', 'barcode'=>'000562CVROU20180430', 'lokasi'=>1),
			array('id_jenis_obat'=>57, 'nomor_batch'=>'9XYJUP58Q', 'jumlah'=>490, 'kadaluarsa'=>'2018-05-29', 'barcode'=>'000579XYJUP58Q20180529', 'lokasi'=>1),
			array('id_jenis_obat'=>58, 'nomor_batch'=>'3IW6TQM', 'jumlah'=>380, 'kadaluarsa'=>'2018-08-29', 'barcode'=>'000583IW6TQM20180829', 'lokasi'=>1),
			array('id_jenis_obat'=>59, 'nomor_batch'=>'SATKNJ8', 'jumlah'=>270, 'kadaluarsa'=>'2018-09-02', 'barcode'=>'00059SATKNJ820180902', 'lokasi'=>1),
			array('id_jenis_obat'=>60, 'nomor_batch'=>'568K8F', 'jumlah'=>10, 'kadaluarsa'=>'2018-09-11', 'barcode'=>'00060568K8F20180911', 'lokasi'=>1),
			array('id_jenis_obat'=>61, 'nomor_batch'=>'RQ298Q2I8', 'jumlah'=>100, 'kadaluarsa'=>'2018-09-15', 'barcode'=>'00061RQ298Q2I820180915', 'lokasi'=>1),
			array('id_jenis_obat'=>62, 'nomor_batch'=>'WDY1GP', 'jumlah'=>260, 'kadaluarsa'=>'2018-09-17', 'barcode'=>'00062WDY1GP20180917', 'lokasi'=>1),
			array('id_jenis_obat'=>63, 'nomor_batch'=>'OJXI1LCC0', 'jumlah'=>450, 'kadaluarsa'=>'2018-09-28', 'barcode'=>'00063OJXI1LCC020180928', 'lokasi'=>1),
			array('id_jenis_obat'=>64, 'nomor_batch'=>'C74013IBJ', 'jumlah'=>490, 'kadaluarsa'=>'2018-10-15', 'barcode'=>'00064C74013IBJ20181015', 'lokasi'=>1),
			array('id_jenis_obat'=>65, 'nomor_batch'=>'5IGNEM5X5V', 'jumlah'=>400, 'kadaluarsa'=>'2018-10-31', 'barcode'=>'000655IGNEM5X5V20181031', 'lokasi'=>1),
			array('id_jenis_obat'=>66, 'nomor_batch'=>'P4M8EVQDP3', 'jumlah'=>290, 'kadaluarsa'=>'2018-11-11', 'barcode'=>'00066P4M8EVQDP320181111', 'lokasi'=>1),
			array('id_jenis_obat'=>67, 'nomor_batch'=>'2XZZ6PMAT1', 'jumlah'=>450, 'kadaluarsa'=>'2018-12-22', 'barcode'=>'000672XZZ6PMAT120181222', 'lokasi'=>1),
			array('id_jenis_obat'=>68, 'nomor_batch'=>'6GWX49CWA', 'jumlah'=>90, 'kadaluarsa'=>'2018-12-27', 'barcode'=>'000686GWX49CWA20181227', 'lokasi'=>1),
			array('id_jenis_obat'=>69, 'nomor_batch'=>'Q2H4TG', 'jumlah'=>140, 'kadaluarsa'=>'2019-01-05', 'barcode'=>'00069Q2H4TG20190105', 'lokasi'=>1),
			array('id_jenis_obat'=>70, 'nomor_batch'=>'8PTSZUMMAV', 'jumlah'=>300, 'kadaluarsa'=>'2018-12-26', 'barcode'=>'000708PTSZUMMAV20181226', 'lokasi'=>1),
			array('id_jenis_obat'=>71, 'nomor_batch'=>'VD5TXPHPC', 'jumlah'=>210, 'kadaluarsa'=>'2019-01-04', 'barcode'=>'00071VD5TXPHPC20190104', 'lokasi'=>1),
			array('id_jenis_obat'=>72, 'nomor_batch'=>'1212AB', 'jumlah'=>500, 'kadaluarsa'=>'2018-09-11', 'barcode'=>'000721212AB20180911', 'lokasi'=>1),
			array('id_jenis_obat'=>1, 'nomor_batch'=>'PXHW96A', 'jumlah'=>20, 'kadaluarsa'=>'2018-01-27', 'barcode'=>'00001PXHW96A20180127', 'lokasi'=>2),
			array('id_jenis_obat'=>2, 'nomor_batch'=>'FSB7DK', 'jumlah'=>10, 'kadaluarsa'=>'2018-02-24', 'barcode'=>'00002FSB7DK20180224', 'lokasi'=>2),
			array('id_jenis_obat'=>3, 'nomor_batch'=>'3SQOJ8', 'jumlah'=>80, 'kadaluarsa'=>'2018-03-07', 'barcode'=>'000033SQOJ820180307', 'lokasi'=>2),
			array('id_jenis_obat'=>4, 'nomor_batch'=>'GQ8RA2', 'jumlah'=>80, 'kadaluarsa'=>'2018-03-28', 'barcode'=>'00004GQ8RA220180328', 'lokasi'=>2),
			array('id_jenis_obat'=>5, 'nomor_batch'=>'HOL90N28M', 'jumlah'=>60, 'kadaluarsa'=>'2018-05-19', 'barcode'=>'00005HOL90N28M20180519', 'lokasi'=>2),
			array('id_jenis_obat'=>6, 'nomor_batch'=>'XWCHVLN7', 'jumlah'=>60, 'kadaluarsa'=>'2018-06-16', 'barcode'=>'00006XWCHVLN720180616', 'lokasi'=>2),
			array('id_jenis_obat'=>7, 'nomor_batch'=>'NT8WWU70C', 'jumlah'=>50, 'kadaluarsa'=>'2018-06-29', 'barcode'=>'00007NT8WWU70C20180629', 'lokasi'=>2),
			array('id_jenis_obat'=>8, 'nomor_batch'=>'9OOGG9L', 'jumlah'=>10, 'kadaluarsa'=>'2018-06-30', 'barcode'=>'000089OOGG9L20180630', 'lokasi'=>2),
			array('id_jenis_obat'=>9, 'nomor_batch'=>'YVQPQ6I', 'jumlah'=>30, 'kadaluarsa'=>'2018-07-07', 'barcode'=>'00009YVQPQ6I20180707', 'lokasi'=>2),
			array('id_jenis_obat'=>10, 'nomor_batch'=>'ABJAUL6', 'jumlah'=>20, 'kadaluarsa'=>'2018-07-11', 'barcode'=>'00010ABJAUL620180711', 'lokasi'=>2),
			array('id_jenis_obat'=>11, 'nomor_batch'=>'SJ9ET1IEU', 'jumlah'=>10, 'kadaluarsa'=>'2018-08-01', 'barcode'=>'00011SJ9ET1IEU20180801', 'lokasi'=>2),
			array('id_jenis_obat'=>12, 'nomor_batch'=>'INLCG1220', 'jumlah'=>30, 'kadaluarsa'=>'2018-08-05', 'barcode'=>'00012INLCG122020180805', 'lokasi'=>2),
			array('id_jenis_obat'=>13, 'nomor_batch'=>'40S5PIYO', 'jumlah'=>10, 'kadaluarsa'=>'2018-08-09', 'barcode'=>'0001340S5PIYO20180809', 'lokasi'=>2),
			array('id_jenis_obat'=>14, 'nomor_batch'=>'VFOZ256M', 'jumlah'=>20, 'kadaluarsa'=>'2018-08-26', 'barcode'=>'00014VFOZ256M20180826', 'lokasi'=>2),
			array('id_jenis_obat'=>15, 'nomor_batch'=>'8JDZ2OZEII', 'jumlah'=>30, 'kadaluarsa'=>'2018-09-11', 'barcode'=>'000158JDZ2OZEII20180911', 'lokasi'=>2),
			array('id_jenis_obat'=>16, 'nomor_batch'=>'KKKFXL0', 'jumlah'=>40, 'kadaluarsa'=>'2018-10-05', 'barcode'=>'00016KKKFXL020181005', 'lokasi'=>2),
			array('id_jenis_obat'=>17, 'nomor_batch'=>'LAOSLK8CGF', 'jumlah'=>20, 'kadaluarsa'=>'2018-10-16', 'barcode'=>'00017LAOSLK8CGF20181016', 'lokasi'=>2),
			array('id_jenis_obat'=>18, 'nomor_batch'=>'ASKVSQAJ05', 'jumlah'=>30, 'kadaluarsa'=>'2018-10-18', 'barcode'=>'00018ASKVSQAJ0520181018', 'lokasi'=>2),
			array('id_jenis_obat'=>19, 'nomor_batch'=>'V10YO5GHZX', 'jumlah'=>40, 'kadaluarsa'=>'2018-10-30', 'barcode'=>'00019V10YO5GHZX20181030', 'lokasi'=>2),
			array('id_jenis_obat'=>20, 'nomor_batch'=>'MNHB97H', 'jumlah'=>10, 'kadaluarsa'=>'2019-01-18', 'barcode'=>'00020MNHB97H20190118', 'lokasi'=>2),
			array('id_jenis_obat'=>1, 'nomor_batch'=>'PXHW96A', 'jumlah'=>5, 'kadaluarsa'=>'2018-01-27', 'barcode'=>'00001PXHW96A20180127', 'lokasi'=>3),
			array('id_jenis_obat'=>2, 'nomor_batch'=>'FSB7DK', 'jumlah'=>5, 'kadaluarsa'=>'2018-02-24', 'barcode'=>'00002FSB7DK20180224', 'lokasi'=>3),
			array('id_jenis_obat'=>3, 'nomor_batch'=>'3SQOJ8', 'jumlah'=>5, 'kadaluarsa'=>'2018-03-07', 'barcode'=>'000033SQOJ820180307', 'lokasi'=>3),
			array('id_jenis_obat'=>4, 'nomor_batch'=>'GQ8RA2', 'jumlah'=>5, 'kadaluarsa'=>'2018-03-28', 'barcode'=>'00004GQ8RA220180328', 'lokasi'=>3),
			array('id_jenis_obat'=>5, 'nomor_batch'=>'HOL90N28M', 'jumlah'=>5, 'kadaluarsa'=>'2018-05-19', 'barcode'=>'00005HOL90N28M20180519', 'lokasi'=>3),
			array('id_jenis_obat'=>6, 'nomor_batch'=>'XWCHVLN7', 'jumlah'=>5, 'kadaluarsa'=>'2018-06-16', 'barcode'=>'00006XWCHVLN720180616', 'lokasi'=>3),
			array('id_jenis_obat'=>7, 'nomor_batch'=>'NT8WWU70C', 'jumlah'=>5, 'kadaluarsa'=>'2018-06-29', 'barcode'=>'00007NT8WWU70C20180629', 'lokasi'=>3),
			array('id_jenis_obat'=>8, 'nomor_batch'=>'9OOGG9L', 'jumlah'=>5, 'kadaluarsa'=>'2018-06-30', 'barcode'=>'000089OOGG9L20180630', 'lokasi'=>3),
		));
	}
}
