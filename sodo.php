<?php
// Tạo một đối tượng Graphviz
$graph = new Graphviz();

// Thêm các thực thể
$graph->addNode('Trường', array('label' => 'Trường'));
$graph->addNode('Khoa', array('label' => 'Khoa'));
$graph->addNode('Lớp', array('label' => 'Lớp'));
$graph->addNode('Môn Học', array('label' => 'Môn Học'));
$graph->addNode('Sinh Viên', array('label' => 'Sinh Viên'));
$graph->addNode('Đăng Ký', array('label' => 'Đăng Ký'));

// Thêm các mối quan hệ
$graph->addEdge('Trường', 'Khoa', array('label' => 'có nhiều khoa'));
$graph->addEdge('Khoa', 'Trường', array('label' => 'thuộc về một trường'));
$graph->addEdge('Khoa', 'Lớp', array('label' => 'có nhiều lớp'));
$graph->addEdge('Lớp', 'Khoa', array('label' => 'thuộc về một khoa'));
$graph->addEdge('Lớp', 'Sinh Viên', array('label' => 'có nhiều sinh viên'));
$graph->addEdge('Sinh Viên', 'Lớp', array('label' => 'thuộc về một lớp'));
$graph->addEdge('Môn Học', 'Đăng Ký', array('label' => 'có nhiều đăng ký'));
$graph->addEdge('Đăng Ký', 'Môn Học', array('label' => 'là cho một môn học'));
$graph->addEdge('Sinh Viên', 'Đăng Ký', array('label' => 'có nhiều đăng ký'));
$graph->addEdge('Đăng Ký', 'Sinh Viên', array('label' => 'là cho một sinh viên'));

// Xuất sơ đồ ER
$graph->output('png', 'sơ đồ ER.png');
