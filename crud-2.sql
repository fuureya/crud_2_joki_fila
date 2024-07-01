-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2024 at 07:07 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `spesialisasi`, `no_hp`, `alamat`) VALUES
(1, 'Dr. John Doe', 'Kardiologi', '081234567891', 'Jl. Kardiologi No. 1'),
(2, 'Dr. Jane Smith', 'Ginekologi', '087654321098', 'Jl. Ginekologi No. 5'),
(3, 'Dr. David Johnson', 'Bedah Umum', '089876543210', 'Jl. Bedah No. 10'),
(4, 'Dr. Sarah Lee', 'Neurologi', '081237465809', 'Jl. Neurologi No. 15'),
(5, 'Dr. Michael Brown', 'Onkologi', '087612345678', 'Jl. Onkologi No. 20'),
(6, 'Dr. Emily Garcia', 'Pedriatri', '089897654321', 'Jl. Pedriatri No. 25'),
(7, 'Dr. William Martinez', 'Psikiatri', '081234567892', 'Jl. Psikiatri No. 30'),
(8, 'Dr. Olivia Wilson', 'Dokter Umum', '087654321097', 'Jl. Dokter No. 35'),
(9, 'Dr. Daniel Clark', 'Ortopedi', '089876543211', 'Jl. Ortopedi No. 40'),
(10, 'Dr. Sophia Adams', 'THT', '081237465808', 'Jl. THT No. 45'),
(11, 'Dr. Ethan Taylor', 'Mata', '087612345677', 'Jl. Mata No. 50'),
(12, 'Dr. Mia King', 'Dokter Umum', '089897654320', 'Jl. Dokter No. 55'),
(13, 'Dr. Lucas Scott', 'Kulit dan Kelamin', '081234567893', 'Jl. Kulit No. 60'),
(14, 'Dr. Aria Baker', 'Endokrinologi', '087654321096', 'Jl. Endokrinologi No. 65'),
(15, 'Dr. Chloe Miller', 'Anestesiologi', '089876543212', 'Jl. Anestesiologi No. 70'),
(16, 'Dr. John Doe', 'Bedah Umum', '1234567890123', 'Jl. Akses Kesehatan No. 1'),
(17, 'Dr. Sarah Johnson', 'Gigi', '2345678901234', 'Jl. Medis Sejahtera No. 5'),
(18, 'Dr. Michael Brown', 'Kardiovaskular', '3456789012345', 'Jl. Kesehatan Jaya No. 8'),
(19, 'Dr. Lisa Davis', 'Mata', '4567890123456', 'Jl. Medika Indah No. 12'),
(20, 'Dr. Robert Wilson', 'THT', '5678901234567', 'Jl. Sehat Sentosa No. 20'),
(21, 'Dr. Emily Garcia', 'Anak', '6789012345678', 'Jl. Sejahtera Medika No. 30'),
(22, 'Dr. Daniel Martinez', 'Psikiatri', '7890123456789', 'Jl. Harmoni Kesehatan No. 45'),
(23, 'Dr. Olivia Clark', 'Bedah Plastik', '8901234567890', 'Jl. Cemerlang Kesehatan No. 60'),
(24, 'Dr. Ethan Adams', 'Orthopedi', '9012345678901', 'Jl. Kesehatan Bahagia No. 75'),
(25, 'Dr. Sophia White', 'Kulit & Kelamin', '0123456789012', 'Jl. Kesehatan Ceria No. 85'),
(26, 'Dr. Noah Lee', 'Neurologi', '1234567890123', 'Jl. Kesehatan Harmonis No. 100'),
(27, 'Dr. Ava Hall', 'Fisioterapi', '2345678901234', 'Jl. Kesehatan Utama No. 120'),
(28, 'Dr. Ethan Rivera', 'Endokrinologi', '3456789012345', 'Jl. Kesehatan Aman No. 135'),
(29, 'Dr. Mia Scott', 'Pulmonologi', '4567890123456', 'Jl. Kesehatan Makmur No. 150'),
(30, 'Dr. Lucas Carter', 'Urologi', '00', 'Jln. akses');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `tipe_kamar`, `kapasitas`, `harga`) VALUES
(1, 'Kamar Standard', 'Standard', 1, '500000.00'),
(2, 'Kamar VIP', 'VIP', 1, '1000000.00'),
(3, 'Kamar Suite', 'Suite', 2, '1500000.00'),
(4, 'Kamar Rawat Inap Kelas 1', 'Rawat Inap Kelas 1', 1, '800000.00'),
(5, 'Kamar Rawat Inap Kelas 2', 'Rawat Inap Kelas 2', 2, '600000.00'),
(6, 'Kamar Perawatan Intensif', 'Perawatan Intensif', 1, '2000000.00'),
(7, 'Kamar Bayi', 'Bayi', 1, '400000.00'),
(8, 'Kamar Anak', 'Anak', 1, '600000.00'),
(9, 'Kamar Bersalin', 'Bersalin', 1, '700000.00'),
(10, 'Kamar Isolasi', 'Isolasi', 1, '900000.00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `tanggal_kadaluarsa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `stok`, `harga`, `tanggal_kadaluarsa`) VALUES
(1, 'Paracetamol', 'Tablet', 100, '5000.00', '2024-12-31'),
(2, 'Amoxicillin', 'Kapsul', 75, '8000.00', '2024-11-30'),
(3, 'Lansoprazole', 'Kapsul', 50, '12000.00', '2025-01-15'),
(4, 'Simvastatin', 'Tablet', 60, '15000.00', '2024-10-31'),
(5, 'Omeprazole', 'Kapsul', 90, '10000.00', '2025-03-20'),
(6, 'Metformin', 'Tablet', 120, '7000.00', '2024-09-30'),
(7, 'Atorvastatin', 'Tablet', 45, '18000.00', '2025-02-28'),
(8, 'Losartan', 'Tablet', 55, '9000.00', '2024-11-15'),
(9, 'Ibuprofen', 'Tablet', 80, '5500.00', '2024-12-20'),
(10, 'Cephalexin', 'Kapsul', 70, '8500.00', '2025-01-10'),
(11, 'Metoprolol', 'Tablet', 40, '11000.00', '2024-09-25'),
(12, 'Amlodipine', 'Tablet', 85, '13000.00', '2025-03-10'),
(13, 'Gabapentin', 'Kapsul', 65, '9500.00', '2024-11-05'),
(14, 'Warfarin', 'Tablet', 30, '16000.00', '2025-02-15'),
(15, 'Prednisone', 'Tablet', 110, '6000.00', '2024-10-10'),
(16, 'Metronidazole', 'Tablet', 95, '7500.00', '2025-01-30'),
(17, 'Amitriptyline', 'Tablet', 50, '14000.00', '2024-09-15'),
(18, 'Diazepam', 'Tablet', 65, '17000.00', '2025-03-05'),
(19, 'Tramadol', 'Tablet', 75, '8500.00', '2024-11-20'),
(20, 'Fluoxetine', 'Kapsul', 90, '9500.00', '2025-02-28'),
(21, 'Citalopram', 'Kapsul', 40, '12000.00', '2024-10-25'),
(22, 'Sertraline', 'Kapsul', 55, '11000.00', '2025-03-15'),
(23, 'Hydrochlorothiazide', 'Tablet', 60, '10000.00', '2024-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `usia`, `jenis_kelamin`, `alamat`) VALUES
(1, 'John Doe', 25, 'Laki-laki', 'Jl. Contoh No. 123'),
(2, 'Jane Smith', 30, 'Perempuan', 'Jl. Percobaan No. 456'),
(3, 'Alice Johnson', 22, 'Perempuan', 'Jl. Uji Coba No. 789'),
(4, 'Bob Williams', 40, 'Laki-laki', 'Jl. Sample No. 321'),
(5, 'Sarah Brown', 35, 'Perempuan', 'Jl. Dummy No. 654'),
(6, 'Michael Davis', 28, 'Laki-laki', 'Jl. Test No. 987'),
(7, 'Emily Wilson', 29, 'Perempuan', 'Jl. Example No. 135'),
(8, 'David Miller', 33, 'Laki-laki', 'Jl. Experiment No. 246'),
(9, 'Olivia Garcia', 27, 'Perempuan', 'Jl. Demo No. 579'),
(10, 'Daniel Martinez', 31, 'Laki-laki', 'Jl. Trial No. 864'),
(11, 'Sophia Rodriguez', 26, 'Perempuan', 'Jl. Validation No. 753'),
(12, 'Liam Lopez', 24, 'Laki-laki', 'Jl. Pilot No. 159'),
(13, 'Ava Lee', 23, 'Perempuan', 'Jl. Prototype No. 357'),
(14, 'William Hernandez', 37, 'Laki-laki', 'Jl. Simulation No. 468'),
(15, 'Ella Nguyen', 32, 'Perempuan', 'Jl. Model No. 246'),
(16, 'James Kim', 34, 'Laki-laki', 'Jl. Validation No. 135'),
(17, 'Mia Tran', 21, 'Perempuan', 'Jl. Example No. 789'),
(18, 'Benjamin Chang', 36, 'Laki-laki', 'Jl. Experiment No. 642'),
(19, 'Charlotte Patel', 38, 'Perempuan', 'Jl. Sample No. 753'),
(20, 'Logan Gupta', 39, 'Laki-laki', 'Jl. Test No. 864'),
(21, 'John Doe', 30, 'Laki-laki', 'Jl. Contoh No. 123'),
(22, 'Jane Doe', 25, 'Perempuan', 'Jl. Percobaan No. 456'),
(23, 'Alice', 22, 'Perempuan', 'Jl. Uji Coba No. 789'),
(24, 'Bob', 28, 'Laki-laki', 'Jl. Data Baru No. 321'),
(25, 'Charlie', 35, 'Laki-laki', 'Jl. Data Lama No. 654'),
(26, 'Emma', 29, 'Perempuan', 'Jl. Percobaan No. 987'),
(27, 'Frank', 27, 'Laki-laki', 'Jl. Uji Coba No. 135'),
(28, 'Grace', 31, 'Perempuan', 'Jl. Data Baru No. 246'),
(29, 'Henry', 26, 'Laki-laki', 'Jl. Data Lama No. 579'),
(30, 'Ivy', 33, 'Perempuan', 'Jl. Contoh No. 864'),
(31, 'Jack', 24, 'Laki-laki', 'Jl. Percobaan No. 159'),
(32, 'Karen', 32, 'Perempuan', 'Jl. Uji Coba No. 753'),
(33, 'Leo', 23, 'Laki-laki', 'Jl. Data Baru No. 468'),
(34, 'Mia', 30, 'Perempuan', 'Jl. Data Lama No. 927'),
(35, 'Nathan', 29, 'Laki-laki', 'Jl. Contoh No. 246'),
(36, 'Olivia', 27, 'Perempuan', 'Jl. Percobaan No. 531'),
(37, 'Peter', 34, 'Laki-laki', 'Jl. Uji Coba No. 864'),
(38, 'Quinn', 25, 'Perempuan', 'Jl. Data Baru No. 357'),
(39, 'Ryan', 28, 'Laki-laki', 'Jl. Data Lama No. 690'),
(40, 'Sara', 31, 'Perempuan', 'Jl. Contoh No. 813');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id_peralatan` int(11) NOT NULL,
  `nama_peralatan` varchar(100) NOT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id_peralatan`, `nama_peralatan`, `kondisi`, `lokasi`) VALUES
(1, 'Bed Pasien', 'Baik', 'Ruang Rawat Inap'),
(2, 'Meja Operasi', 'Baik', 'Ruang Operasi'),
(3, 'Infus', 'Baik', 'Ruang Perawatan'),
(4, 'ECG Machine', 'Rusak', 'Unit ICU'),
(5, 'Alat Pemantau Suhu', 'Baik', 'Ruang Perawatan'),
(6, 'Neonatal Incubator', 'Baik', 'NICU'),
(7, 'Defibrillator', 'Baik', 'Unit Darurat'),
(8, 'Peralatan Anestesi', 'Rusak', 'Ruang Operasi'),
(9, 'Alat Pemeriksaan Darah', 'Baik', 'Laboratorium'),
(10, 'Alat Pemantauan Nadi', 'Baik', 'Ruang Perawatan'),
(11, 'Ventilator', 'Baik', 'Unit ICU'),
(12, 'Stetoskop', 'Baik', 'Ruangan Dokter'),
(13, 'Gelang Pasien', 'Baik', 'Ruang Rawat Inap'),
(14, 'Pompa Infus', 'Baik', 'Ruang Perawatan'),
(15, 'Alat Pemeriksaan Mata', 'Baik', 'Ruang Pemeriksaan'),
(16, 'Alat Pemeriksaan Telinga', 'Baik', 'Ruang Pemeriksaan'),
(17, 'USG Machine', 'Rusak', 'Ruang Diagnostik'),
(18, 'Alat EKG', 'Baik', 'Ruang Pemeriksaan'),
(19, 'Alat Pemeriksaan Gigi', 'Baik', 'Ruang Pemeriksaan'),
(20, 'Glove Box', 'Baik', 'Ruang Sterilisasi'),
(21, 'Scrub Sink', 'Baik', 'Ruang Operasi'),
(22, 'Alat Pembersih Vakum', 'Baik', 'Ruang Pembersihan'),
(23, 'Troli Medis', 'Baik', 'Area Transportasi'),
(24, 'Penlight', 'Baik', 'Ruang Perawatan'),
(25, 'Alat Pemeriksaan Tekanan Darah', 'Rusak', 'Ruang Pemeriksaan'),
(26, 'Cautery Machine', 'Baik', 'Ruang Operasi'),
(27, 'Alat Pencuci Tangan Otomatis', 'Baik', 'Ruang Pembersihan'),
(28, 'Stethoscope', 'Baik', 'Ruangan Dokter'),
(29, 'Sarung Tangan Medis', 'Baik', 'Ruang Perawatan'),
(30, 'Medical Waste Container', 'Baik', 'Ruang Sterilisasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'fillah', 'fillah', 'fillah'),
(2, 'admin', 'admin', 'admin'),
(4, 'coba', 'coba', 'coba'),
(5, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(18, 'admin', 'admin'),
(19, 'd', '$2y$10$lThSGmgeHrS0qr2LFMEic.moG60zHIruMaYEfalO65sLNOqqj3dzC'),
(20, 'm', '$2y$10$xskndMbBIV09dlcO.GhT3.L7n7RYglVjwgSKpz8xtKVEZ5M4v7FIO'),
(21, 'jil', 'jil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id_peralatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id_peralatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
