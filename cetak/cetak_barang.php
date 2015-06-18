 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Kode Barang</th><th>Nama Barang</th>
                                        <th>Berat</th><th>Harga satuan</th><th>Stok</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblbarang ";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['kode_barang'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['nama_barang']?></td>
                                        <td> <?php echo $record['berat']?>KG</td>
                                        <td><?php	echo $record['harga_satuan'];?></td>
                       
                                        <td><?php echo $record['stock'] ?> </td>
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>