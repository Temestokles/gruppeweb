 #!/bin/bash
while(sleep 3);
	do
		cat ./varsel.xml |grep ".tabular." -A 11|head -n9|grep .symbol|awk '{print $3}'|cut -d\" -f2 > ./status;
		cat ./varsel.xml |grep ".tabular." -A 11|head -n9|grep windSpeed|awk '{print $3" "$4}'|cut -d\" -f 2;
		cat ./varsel.xml |grep ".tabular." -A 11|head -n9|grep .temperature|awk '{print $3}'|cut -d\" -f2;
	done;
