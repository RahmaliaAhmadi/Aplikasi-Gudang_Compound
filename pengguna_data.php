
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<table width="1200" border="0" align="left">
  <tr>
    <td rowspan="2" valign="top" width="180"><ul id="MenuBar1" class="MenuBarVertical">
     
      <li><a href="#">BARANG</a></li> 
      <li><a href="#">Pengguna</a></li>
	<li><a href="#">Data Barang</a></li>
    <li><a href="#">Data Supplier</a></li>
    <li><a href="#">Data Costumer</a></li>
    <li><a href="#">Data Kelompok</a></li>
    <li><a href="#">Pembelian Barang</a></li>
    <li><a href="#">Buat PO</a></li> 
    <li><a href="#">PRODUKSI</a></li>     
       <li><a href="#">Order Formula</a></li>
        <li><a href="#">Data Formula</a></li>
         <li><a href="#">Laporan Kerja</a></li>
          <li><a href="#">Laporan Produksi</a></li>
           <li><a href="#">Pengiriman Barang</a></li>
            <li><a href="#">Data Barang Produksi</a></li>
             <li><a href="#">PENIMBANGAN</a></li>
              <li><a href="#">Hasil Penimbangan</a></li>
               <li><a href="#">Pemakaian Barang</a></li>
                <li><a href="#">GUDANG</a></li>
                 <li><a href="#">Pengisian Tangker</a></li>
                  <li><a href="#">Pengambilan Barang</a></li>
                   <li><a href="#">LAPORAN</a></li>
                    <li><a href="#">Laopran Pemakaian</a></li>
                    <li><a href="#">Laopran Penjualan</a></li>
                    <li><a href="#">Laopran Pembelian</a></li>
    </ul></td>
    <td height="40"><h3 valign="top" align="center">Data Pengguna</h3>
<div class='col-md-8 col-md-offset-2'></td>
  </tr>
  <tr>
    <td align="left" valign="top">
<div class='col-md-8 col-md-offset-2'>
                        <table class="table table-hover table-condensed table-striped" width="800" align="left" >
                       <right> <a href="home.php?go=Pengguna_Form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a></right>
                                <thead>
                                    <tr>
                                        <th>No</th><th> user </th><th> aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                               <?php
$no=1;
$query = "select * from tblpengguna order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))

{
?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                              <?php echo $data['user'] ?>                                        
                                        </td>
                                        <td>
                                        <a href='?go=Pengguna_Hapus&amp;id=<?php echo $data['id']; ?>'
             class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                            <a href='?go=Pengguna_Hapus&amp;id=<?php echo $data['id']; ?>
                                             'onclick="return confirm('Yakin data akan dihapus?') ";
                 class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>                                         
                                        </td>
                                        
                                        


<?php $no++;} ?>
 </tr>
</tbody>

                            </table>
    </div>
    <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>



