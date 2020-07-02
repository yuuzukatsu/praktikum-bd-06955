insert all
into helpdesk values(1,'HD Bank Jatim','12345')
into helpdesk values(2,'HD Bank Mandiri','23456')
into helpdesk values(3,'HD BRI','34567')
into helpdesk values(4,'HD BTPN','45678')
into helpdesk values(5,'HD BNI','56789')
select 1 from dual;

insert all
into pelanggan values(1,'Bank Jatim','54321','Basuki Rahmat')
into pelanggan values(2,'Bank Mandiri','65432','Arief Rahman Hakim')
into pelanggan values(3,'BRI','76543','Pandegiling')
into pelanggan values(4,'BTPN','87654','Darmo')
into pelanggan values(5,'BNI','98765','Graha Pena')
select 1 from dual;

insert all
into case_gangguan values(1,to_date('10/05/2020','dd/mm/yyyy'),1,1,'down')
into case_gangguan values(2,to_date('10/05/2020','dd/mm/yyyy'),2,2,'lambat')
into case_gangguan values(3,to_date('11/05/2020','dd/mm/yyyy'),3,3,'down')
into case_gangguan values(4,to_date('12/05/2020','dd/mm/yyyy'),1,1,'lambat')
into case_gangguan values(5,to_date('12/05/2020','dd/mm/yyyy'),4,4,'down')
select 1 from dual;
