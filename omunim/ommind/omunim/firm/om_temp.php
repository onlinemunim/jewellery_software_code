<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('814CDB4A8D682710AAQAAAAWAAAABIgAAACABAAAAAAAAAD/67TEHpMHEyhcuwqFz3nrdFNUYa8jC5HSj6yEJ1DI23Yi39NDNvMyKSBNSVfQq6gGY2zUPy7mPVdrRisiIUZibmOuyBkKQwpBk8cMobP6FdGXtWqrZiwlugGDAkNveYH581+vr9NJ8brdquie1vM836c7v8C6+/W8JTzLub9mZD7KrwM5+ol0PTUAAACgAgAAnXgQJMKYAvx6Qg1mkoSKzGRuG6WZwFYBW6FwUJ+7zgNfX1SVsZc/ObzzIapZAMRDEnPrUdxxiZjfbedWo7hv85UVo3/H5JbueJdQtbDMUDSaSXv2EzMcRta7feIATOjQ0shBgwO4ssRMYolettqUZBeajik4ZfJlJoPskjqvBmNkiv8GERqimolOUS0AecanUADjOVdcY0k1YGx1257I4kbpouFhNxSmSOAKVGquPA8cWjv/R5kCncCbMPFr/6EPJONAvjalSWP2NHxQoOReBvp94VOAxk1k0srHT3RBGCm+EmIj/uqb2I5f0Pfpupg4yI0jPJ7sTQafMXjelHGCYK4jCr2XiTNLlP93UuKw31sQyXkgGPSzm2xESm6NhTWgxQuIof/NoWipoN0IJL6f14NdF9BPoBFvl5sQTsbwm7nKXufEW4Z62exyXiaQGAgYLo4vkWAyLfypn49BuS7DWgC6f+mKM8BX26ESiFJnyGkkFvs12FY5wqomJqmi+9zx86BZ9UzMVaqUQuQNBJXx+eGmU3SAwjYsQmBOxZObfO6Up0zO+9bXqK9A0xLhzYOldss5R4uXrsz6N0D1SuYz53OivstcywoFKtOcbeN2lBTg2XOlAn4TxMSD+wiZhDynxQY2fhNgNDHtNh2lrrsZeu0LWCTFPKhVIl/v83VW0e8Uo/ugyl+N304E+p1Q95wIhrTyKbIBYdQ0qGtYh5tZNgfcVZ0HaG20fD8ADnMYms8C3VJ3vqEuRoBCSsJxvebhOkOuI9ZhsjYOxfe+YQdmDj4NHnIQMNxha/bDGm4HTdU5+kBA9sHS7XjlmzlqrsBgrkQuMUAbY+pAOHQeu8YbxwA+cEqQqPLJNxcS7s/242xth+uqX58gk8MTPGd4C2ByNgAAALACAADMed1GnukDXDKAR8fuq5xiQ41TXqiUXgkUtGQhDXjzk+IXAfKem9VGGF0CMZ9E//3y41Ge784I6mRU5IPzEsv/ASpboX+XTcSCSFaXJdAxVWMobS0JiXpxWNKF4SY9M1zTDvNaYAKYYpTcnzLp+cC3e1wwn3Yrg5F/d/X17Nu6ei9mV4bU/WzmWzCE3gOdfzEWTjnPVLd6E+os/Hweb2PO/ILUDpCbDWDFf20tn2l5Y7m0RPCQ8pqgZPF/hhXd3bSu0l9UQyjtxDTWcTAnktw4iBpoZwlTh0mvws37ewnmfWtdIJbH1Y7YCv27sWRQfvNEvgOb/+KtMfF3Ima8RXNp29RibkxjzcdFN93XjestQs3qtZpi430Ktr9GAbwsA6pUwjN6iP1WJ++tLyHZOVfDG9cEOR+g6HzAoznHTjHyXOQ2214XIN0xOtX2/ysMQwxtZxs861zIhKne9iygkqzfiDoTWakajDZoM2fGgr+4cnmRwpUOIVxuJ1uyCM5bTj6JQ1IlEVVfXNNZ1rc5pJXk7TnDAxXCJ+S1qPZN+TLq0UFrSAC9Y7kLzwX/EO8AqkjA2uBDl9UG9IPBkcwUlk1tJyjS8/YtBuolnArbijDkF18cyyxE9tExNsOxmFe/aI+KL0dzGEh/AIq6F6EteX5/vBRPtSt1zzLq47zxZLQEiZR59INbs8AG4PJuEhnGTHh1dmjjPaxj4XTiGXlkg9YxsohX9+flRgnaoLugEZrvK8Q2S4b7GfUBdJom9Q1EpwGyjTDGW8Nhqa/cLOEt6Ma7+lGqJyANV7VG5Lc1Bl97XXSFh4p5irFGaXwK5c9sSHPtmPukwIqywNZkz9cqnIO8zHnzXsp8PB1WUWEy+gE9oK/3KXG3fslhuwy/zJ2O/zSfTEaPMYjmVrA1/9hWaCgCNwAAALACAAAF4OYI79ZD98YfGD2XHFKLQ7UFGf1BwPrBee1RooGMlxhH7cZnjFspyKl4+NnSmomtkO8n94ZaIWzWFYTZX6ssgGOUrGX3YhP8SBZVzHiolnwPTEyOGuCvSjGdaoxymxghU4ENn9zMnzhvbzz85lLVZBM4OiMJOwIyZqL0jMAhVuZfh17A8UU83RE+YbatCe8EGMO0QcX06gVF1gBqEaqFuVK0qcyZIDFuCNH9RI2g1SbejiTNsVMufw+vVBUesdBzkO8AKPBBU9IRTHOiWveK7E/3RMhdcGbBExrRYnPYsr6gZeXTIGvKQ9g4cNBcp509NxfIIQEZaf4ohquOSLLabXLYVhfUG6OWOL303CvAevp6CJlbt6Cy1pyNZX/dze+gMC+gfqQP+tv97D5riG0tjfEvP44KYbUQ5E4/bqxoU1rY7y2T40+M51nlrJXqronvp1CAokJmyjyJdTclHT32O6/BDvPRN85JL1PPfKcvia5OZ6+HzxbwXUV09iytnbzwvXBYm6cJ+wRzyvi/4EVldBkjMsku5ijUJmESEWEIdQJ6ugF2TKZEyznKJOt4514pntUksHZWcqZAzZZQOg8uF3/bbr3B3unWzJ9mDA3f+P8+qH8IxsViOXtarAZIfF1GrH74GtWW2j8FsEy9q62/Sfkk6o+wT7fgeu9o4mO4YT3gU+0D2aBHlvvru7Lc9qvI59D709SAmGpf9+DzX2hQkmCQQacGFXAIZ8dl4O+MjKRiEeqywprdy3Ac5P4ZKQs5y3zilB1x/uCsJR/XnTRTRfZLRtu7x/MtR996fJr7I5GDqf+Oxx/yikdLkqF4FViEc13wod3XVd5Tfy/oWkjpTNmxsgPh7xLW2rLhUWosIo72G1Ei0PUbfDOtIy8+8VPRQBkyoe719+ZafYAoX5ieOAAAALgCAAB9mJBK015eDXhbi3DqV2BPhgALWZp8kqC5IFZ1dTFBCubXhhjAG0smiWXhm6059V8s2Ni1NAwDv/te5SKMh18c71jGJ6BGqzSEw896o/srDCqjxoFR6Zs+RRoE1tEXEZ3lzqHm8pKEFdw6nqamBCX69MOJqHaAkznQXnbx3Z8XhaMc3X9Yxhb/5qiglMF3dqQSWeZAMvTwrVjDQqdaYKxE4os/JOCE/6HKq32lvqNQlaS/T0ejyGL6Mn61Ikx+yT2WzM96qoRM+gVO/MKqfwICjQAelDFCwJ+ixsjYv1gIwJ1idwe9dQpntb0DXlwqAo9H3aiyv77NThVQJ6P1e0cNYOMZotLO3DERWaG9gUfPAwnmFQY4eWaiUxy1pC7Un9Sf1lzJNk8yp2bvjvxT2it0cOBWeIVeOBJk3oKGl2wX2++j7ZtKzWFBScOcuxRkco6g0tl7tH7QjtBlT1xIkJtqaLetenzfcFWcat6osWd8PG+VNof07syQ8pziVBGRnkaWrUZxRNRv5EYFYELOoOr6QjMNqtkIqusc3fActDyIAKlWysB7WvoXIwCEewfZj7aRK56TIVEFqUkvLO/scvqYWgoFG5XGVVQJz+A/a9Eb7RlKZSC/N9eu5HYBnq4pue19HQIJpANSjR84OJAMnNSJ6zvvAraGXhxezYqA2nIL5ftvxDZozAIKFiHXtuRrgdRlEnrRQ1qMTLgNP9D4wIZuoRCXujnsNQvCN06jN/uLwmrX7yHI8mwqTXlUdU5qCIyhOUgqbdqy/rvxJw5TFaNwbGPe9hi6bNGPbKTtFS9ZSziQZYRut9E4aLk+jyox17NShH65uciuixInUQKTVCqfXrPrYYIdIuIU+l7AViuuqdEcSEbU3rxnTXcmlk+SaFKxXsf6vovmEoEGndd+P9IVd6J1CRmXUmUAAAAA');

 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => BJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => Bansal Jewellers
            [firm_desc] => Jewellery shop
            [firm_address] => 4373/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07
            [firm_city] => 
            [firm_phone_details] => 011-25767057
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 68
            [firm_pan_no] => AAXPB3067H
            [firm_tin_no] => 07AAXPB3067H1ZI
            [firm_since] => 2021-05-21 16:57:28
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  U �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �0s�w��s�@r?_r	1�}�[�����:�g�rz�z����v��y ����\�q\���� ������A�Ӗ���� 
>��з�G��Ӏs���8��~@��py�뻓�x�>�8�㞠�i�n�q��+�Ϸ���$z�O�q�Ϸ끃����:c�|�������	�l��c�3Ͽ2z"GS��L@Olt�:��}y'�<���=N~�qӞq��;c$��o�S�s�OC�3����O�n�?Q��6<~�>��'9 ��y8�<}y��O�����a���^�dO��׸�;��z����� `�G8�3����q�~��ܐ1ر�pI�{�q�@ � ��}�Ӯ=�R��8$�����x�1��o[i�D��� ���G^����9$����<V��u�#��`L�9�q��;/�����N;��ހ������O=D���g,A�ۯn���i���=~��9����8 �����0?�rF==2��g�^=���{���t�����'$�21�A���tȠ��מO���:��ғ���� 8>��q���as�z{��9��q������}�����B�װ�I�N���~Pt�I��<���!�Fר��=�:u�������q�~{`�8���Ӿֶ�u�7ꀞy9휎�x^��1^���w���S|N��~Ͼվ(|S����x'B�Ҡ�u�m�]SV:tZ����w5��oq5��ٴ������v�Ű3���ORF;z��=zu='��c�߇�)�� �|��'��լ��x�ƣ���w[��[�[D�4��MKK���kk��.a�n���R�qj*m55x�YY��[W�_mw?TO�W�	�� ��m����#Џ�x�u듚?�¿�X@O�`?��O����=8� �����=k�����m� �b��߷�ٮ?�(����v�'��"|M�5��g��B�{�kM��Y�ci>�q�x�R��{�R7�#���yQ^9]੿� �>� ���ǟ�Lo�?�
����� �O��ύ�+x��ǌ�%� ��ڧ����6���c� ���xK��<M�[-��5�M{D�P�R�z�m�o������g��ӫ�gS���?r��!�ܥk�"좤މn����� � ����߰/�X���x^yv��l��4���'�x��o�?����ٛ����/�ω?|f���|L�v��F��d1CLMf��5]4͘���Kyd�e��_��~Ο�^����u/ڗ�
)�)~�� ������G����I{��].�F�~��~�cW��.�?�qk��%��z���X���\�[k:��v� �����U_�g���������-x����x�⮥�Z�i^�&���MԼ-�� �q��&�<?<�a]6�k{������3�V����]����C4�j�]�v�J5W*}m5���\�����T��q�	 �vN��M������c������3���7v� ��eqh��x��4��>cy��q��m�8R����_�-�]{Z��u}?_��5}OL�״����n���kX5}1����m?R�%��i��6������Yi�_���MC��>~T�������{Ko�k��������rqǾ	q@��$u8����z�n�˞�$q����s���E�<�z�'�<� �%����W[�<������`�s������8�H��<��F �q�#����ө���'�?�y�����N����奿˸��B3�t�� ��h?E���?�8��<sF	�϶x�{g������q�q�2=G�	�������:���C�z�:t��9���t�8�� �A�����'=9�~�ds����g�\{{�~01� �?Q@[wK��oK�d�v�g��9�t�A8�)@Ϧ?���N�z���4g�:��XM���$���C��v}�T�5��t�3N�2�Q���-���e�w:���� ি�OO��F���|�m߄tO����C����o�?�~|�� �,�7'��9�_����������+D�|}���Z~��x�F�𦥩���7��1�Z4�N���U��4I997����։��v� �9�fE���oڟ���,���C��F�4W�þ����K�9se�k����fb>���Pl1�|�x#�� ��� �Kh� �_���~�7����  |(����u���0�<�=&k�<i�g�>�>"���L��3әB��-����E��G��🄵�cN���� ��� ���ZH �.��O�z�5XL�q��~ �v��k�!Yxc�r�K�&� =o����į����\��cm�� �h+=O��<�E3x��_t�s�U�t�U>�f�����9�F����|C���6��4�[\�좻+�{Y���vytb���W�_e:�T��Ǚ����O��3�&܏�s��?��O�'O쯥j^5֡���Q�����_į\x_�Zt&B�xgA�oum��E�Hc��5�v��W�t崂K�K��w�������g�l����5x�e�����w�gR��� 5���Q����z'�巵�|q�_U�X|Y{�i:�m}������t[y����4{���?~�?<{㛝v��_�_���|�ƭ=�����$�7�|q�	��i���ė6��{e�����&U����n�+�� �S��8s�A��t�|U���T� h�x���5�oi_�o�̛����O���mZg6���<G��[�u�jQ��qOgum���w��?�U'GW�^�S�NiI��b�⛒�4���j�?Q> �� �J� ���ǆ�|=㿃� �bx9���A=���N]Q�-$M$��>&�k("�̶v��eX^d� +@�.8� 8��3� �}��w��o��3�y���E��K�W<}e�Ooே�\�^���������ڇ =ׁ��e�pN1�P	'���#��3z۷��;r�n4gU�:�O���_����!�r��dg���� ���Q�8�<Ӹ�]���I��x<t$㸣�� |F8��s������	��A����u�=��<P9�1�t����� �i�8��S���?����.1� zrI��x�1���?���u���i�}0ݱӜ���bH��ׯ�ߦ3ߨ�=��ӓ������'?�q�nG ��ӯ�z|��"���۷u�M{��I��#�H���@>������<�=q�N�H���q���y'��Ӯ9�I��g<׎?���צ3���5릿5��s��G�5߇�4����1p��&�/�|?����+M�������I0Y�F��V����2������c�
#� �� ������c�[|Z���?iܯ��'�O�Y|<���|6���>!j��>+�w��m��þ*�<�K�,4�=WӴ�i����{��?��s�"���d�׿A����<�ӵ�i�s��5�$�8T��8��][���Gf������ �B��G��ǿ����P���h>?�t�"��?���� ��*�yi�=.��~�֙�x�����}*��K���ŋj�wQ\;H����L� g�#��_�w���a�g~�~�>�9�U�����~�z\�>����x�+�c�CŞ,mP��3Y�����gT���������Ai�}�^�y�jzv�������g�X�*塼�����Urb�$�q�������_�Z_�$��O�1i?�W���� ��}/L���u������-{_���W�	����KW��uK�ut_�v��[{/k���s-�e׭�uG���^��5R�E�(F��nk('��������?l��9��'ÿ�V�W���]���~����+x����G��Э�F��A���T�ɭ�z�����-ǌ�� Yiw��,��:��G�_� 2��/��� ���O�����_�� �?�� ��^(��{)�~�3���<M��^4��6��/�}�[���[�R�=[X��uH$Լ)���(�g��63�(�M�Ǐ����WǺ�ڞ�����Z��is�/x�� ��n��A)�k�X�j�|�^�)a��� }� ��x����o�g߀�&���ak�g�+k3[���,�1]i���t���?�~���;�_���jw�Z����;]M���kD��N�o���Q�*�R�ҝ:rqu��w��]R�I��K��Z��'�'���࠿�����BTԭ<��Q�?�����,r�	<����%-5-a%���좒hm<M�}Ze���rG'�$����y��5�'㯋��-���4�K�:�Y���F�/ǉmm���^.�Q/��R���KH�$3iR���x�i��������#'Ӟzt�H�F�J<�P�Q�=�Z\׊�R~�kV��w�V�g�@�<� ���`ќ�� ��{d�r8#(p ��^0q�H������>c��zu��_�(5�ե����[��{�'�FNpG\s�zc����܌g�rqӮ3���փϯ�8�מ��rG=�v$r	�?���s�sץ���O1��?�����\��㏡Ro|���n:�t�S�9��өx�F3�;�$��������t�[���� ���O$��!�zC���� 8�l����`t�y�'� �q�{�� {�;��Ϯ�=� ������w�9#��z9�Q���<t���- �~�r��'�Ӟ�0~��~�� ���@���{���ˣ�Gw���=���lRrq���x�~]C�FLL�����I�}�3�$��<z{ds�pw �����0_aI�����㎸�s�1�1�y<����w�q� v�?���#וߊW���j/#�3�pz��G^�#�Ґ���?�1�^Ԙ��3��z�t��ds׊\{wǱ���N�����[��^�%9�g����גq�C�G>�:����_JLd���OBp~}{�#�H���8��q��O8�(�~���8�c���8�=�4�#�灁�=�����LN������ӵ.����p3�w���.���3w^?_\�q���h�=22}��~�Ɗ(6�]���H7�;��c����w��O|� �c?N(��r�t��Cp��������}���� ��E,{~/�����__Q��ޔ61�8ϯS�G��h���o�]�ӿ�� �׸�/�d�� ��8��E,{~/��y��H����\���:c'����9�,{~a��׿��g�S�I�o� _Ӧ==��(���o����v�o�� ����ѻ�c�?>��^x�(X��������
            [firm_left_thumb_ftype] => 0
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005
            [firm_bank_acc_no] => 4101115000015982
            [firm_bank_ifsc_code] => KVBL0004101
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => demo
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2021
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 136
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2021-06-02 13:04:03
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"BJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"Bansal Jewellers","firm_desc":"Jewellery shop","firm_address":"4373\/57 Reghar Pura Karol Bagh New Delhi-110005  State Code- 07","firm_city":"","firm_phone_details":"011-25767057","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"68","firm_pan_no":"AAXPB3067H","firm_tin_no":"07AAXPB3067H1ZI","firm_since":"2021-05-21 16:57:28","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"0","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"KARUR VYSYA BANK,Karol Bagh, <br> New Delhi-110005","firm_bank_acc_no":"4101115000015982","firm_bank_ifsc_code":"KVBL0004101","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"2","firm_own_id":"101972","firm_name":"demo","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2021","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"136","firm_pan_no":"","firm_tin_no":"","firm_since":"2021-06-02 13:04:03","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":null,"firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => SJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => SHIVAM JEWELLERS
            [firm_desc] => Every piece of jewellery tells a story
            [firm_address] => B.T.C Road,Howly
            [firm_city] => Howly
            [firm_phone_details] => 9101618753
            [firm_email] => shivamkar54@gmail.com
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => JOY MAA KALI
            [firm_form_footer] => 
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 18BXVPK3167R1ZA
            [firm_since] => 2022-05-03 17:25:53
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��(�� (�1����g������>4x�@�u���ky����Wf����;M?M���f�ּA��3�i�֋i�x�ĺ�톇�階�ge?�K� N� ��?jڃO�B���|Y�6~��_��x��&�y�>2|>ң��Q�F�Zj���'Û}V���X��姉~ ���\�(�Ӵ=S�Z�/��F.�H�S|��䔪M�8B+V�Q�������Z��u�F�f�"�Z��H�����F��KK���s��� ��~ÿ�䗾���C�w�;�t�����;���0�;���m5/	�/&+�w�����oj��L��ҼC��v��~�?�v��C�xm���^	����\�K�~�:j�*Y�V�6z�������	x2��=��#\�s�|1��ʒ� B�9�mKP�H�M4ؿ��h�u/���<_?�_i��x��Z�?x�Ǿ,����t�:��x��ǈ��|K��R� Smk������o��S��_ƾ�S��_	t�_����4�i���߅tK��7~,���?Z�t��yiy���Rk-n�W��ѵ��E����as���
|�;;�CF)���iBn��n.
�$+b�.D�U�()aXrJj���Mϲ��o��*K�s]7��Z�'j����m;{�����
E�W|Rմ�~��ϊ�;�(^x��^	���?�~׼!w�1�D�_��|��T��W�𕮓3x�לּ3'��|��[� C���⯎�+�>Y�0���o�F�g��[��{u��j�ς�E��s�~3�|W�x�� �e�����i���O�ͪ��l2��:��<!�f�����]o➙��_>Ǩkw�o�w�K�r3��Ҽ��]+F��<}σ�h]K����/��-�����K�oH��w����/�����s���ŷ�/�|�|U��?j����"�?_񦅦�gQ��Aicm�,�է�ﭵ�u�$^x5�1��N��8C<4��jR�Yʶ�z�T*��,Zt���u��j5��N��J0�M��r��F�5�PJ��I�.�ա)rՍ�VQO�*}_��=|@��i?�5x��s�.�⯂6�<k�|4�u������~"���[k�a� x~Ut��z����\�X��f��E� ���P�fO�B��� �y�FxkHִ�x�¿~+�C����i_�:&��A��'ㅟ��� ��S�za�t���@�|As���G%�����'���|���'��9~
�"�6��� [���&�|'>?�渎ٯt�/��P�Ή{��&��A�^����=;N�𖩪k����ψ�A�^�����:ߌu���{������^�m�<k|4/��V��i�=��s�~�'���>���J�uX�����\Bx�=IѡF�<m*8��ʄhN�/aJ�bg�z����Q�,$�=�N5�
��78�s��Jt��'R3�<�_���R\�a(T�)�5����� ��>8je��N�	��/�:���k����
�u��Z�z�[���'��8��]r�Ŭt���U��������i��ھ�n� �/�Q� [��?o�x���T��|�qs���^�w���|J-����o��ݖ�.]*6X�C7��O��[P�4Oˣk��z]��M|>�4�~E�������+�c�Q���k6���m����3���k�j>1�;M{W��&��x�F�laѴmR��}�x��O|q����]�[�Z�x^�� �6���kz��4jZ5͆�w��ڲ��x��L��V���g�^j:��Ph��:�O���a�U�({w���8jJ�U4�d��~��	:j���l%F��U�7ȹ9a9{J�jI5`�R��ܒ��-�/����� �%W����������
>��į�w�l�<=�FN��_>h�Yݿ���6��o~:�?�>�
��;MM��}�[���~&�B-C����|Q�o�>!|9�N��_��K��|5��6����i� �WV7֯$R�exf�����)�nc��bO�����9a��r�����R�9S�G	��AT�gm�x�U�*��IU���|�i�4�⤯�Vm_u��QE�`�?~7|.������Ɵi�_���מ&��u����6� ��FSs}s$~�����RԮ�l-#���$oV��p� ��� �:���O�~ǟti�����v�律���J�,z}��O��B�~$�z%��W��'�m�:���-���<G��O�{�[x���prc�K��Zќ���u)�u%��]Z���{��)4���=��]z���-�y��J+�䌚����M���W���
��G�
{�8�.���O��^#�͖��W�?�?xu<4�zn���k��A����E�Em��o�\_[� �-���E����\v�#���/�>3�s�{����>�~2�1e�/xs��w�<m?�?]x^��ֶZ���u۟�[��Ɠ����mF�U��aa�Y�y�,C��>���;���C�;��tx���#P���j���e�ivg�+w�G��;H����;i:��yb���ZE�����G�t��>,����/�z���_F��|e�/i� u�_|@�6���$��5�0K���7����ZK��O�~���.��g�ƭW��)ԧϊ�ҫ�r�R��s�\2�R����q���Ɵ�>���p�<Ut�Ӫj��c/�S�)%Nj6��Z�t�N��l�������R�7#��o��G�'���^(�u�퟉�^�W����_�ĭ/���x��7�#����]WKյ_x?���'�/���mu�2[�h�)�#��78.��{�D���<_��þ����M��Û�kzߋ~�������l�MKL�|'�[kY��t���z�J�|B� �
隦�t[ϓ�g����w��U�[[�4�ZL�u{[x<y�{]I�4h�¡�l�]Q�Z��M��m����e���� &;���H������Y�ؖffbK3K1$�I'&���KR�3�^"��w��V�#���T�4��ʕ('[��)�U�N���_j4h���you��{I�T�Niپ^JI�ф��}[�~�^ү4��o�_�Z����Dx�W�7��e��7>0��m��4�=n��3ǫ۝f�iwZu���Ca�[[�_���ꚦ����}_[�L�W���/��Ե;}�t��Q��7����r&��������U��1�6W�W��+��jxZU�M9b��M�%7y�]Y{ӌg-}�F2z�[����jJwJ��i4�S�9V�E����w��'���ݠ����zf���N}j��+����{�]�֭v�^��5;�&>�Vk�|���|�۫��ЖcC��~ �_��ci��xoN��𧌴�/ln;]{S��m�V��-|ͣZ�6�p}Vqo�*��>�M�o�?u�O�-4�S�zn�u�ѯ5k"�T�������J�S�����#y��[�v6�4�̰�8��Oľ׵x�B��7�*Q��j��Y^�;(�6hfU/�2Mmqx.`x緒XdGg<�.�� �(�r����^R�c(��t9I�3�W3v���䛎'�����Jo�$�M�T�J�1n�W�Jߡ�G���x*�����'ԥ����|-���Ǣ���4O
��>��^��֑�5�m/B�E���H������D����F���xC�w��
|4Ҽ7�7V����]C���tO�>8��a��?R���u�i:O��?=_k���,�"k�N�iw{���v�~FW��5i�W��|X��v��d��oOi��?Y�x�pȚ�Q]j:���uc{qW>&������rk:2'�/�sî����JNXz���B�~��]�r��t�&*�P���,z���lO֪B�}<>b��K�-XƓ朽�"��,����缕ܰ�����(���5�G�֗co����
��a��xKO���Ś���)�xj���K�jzN��隞�sa�?|8�H֭5�M3X�_V��9�� ��"����G�3���>8]�_����R��χ�<?c~��{v�>'����~����R�?^궖�V���:���ؙ#�ǌ��8�|3}�����*�4x�&�����0MWĚΣ�x����:v����u�1�Ϧꚯ�ll�	�-u��o������� �����x�����S�c�|=񶱩��7��}���[��5�|Oa�����/xz��ű\��^E�xwV�u��M�-GR��] Y��Q���ԥ
q�Ӥ��a�B
�\.Jxʘ���_���9Ɗ�T�B�z��T�z��rƤ���j���I�(T�Zj�iS��e%J��\�V�HS��R� c��� <�[������:'���M�?�<[���5=��m杪i����Omso*:�C�ۢ�#����S��� ����&��/��↟��_ �+k�C�:�ڶ�g5��o�gO���χ�^m2�]�O�������<UyԾ#Ios�hV2|E�~������\q�Z8�IT�	T��	ʍIEJT���5+ߕ�d��ex���Qt*Λ|ь���e�)�(�F-��־ͫ7��� ����� `_�'� ��E������T������J���~!���������h�+>|4ӼM�i���͗����Ko+^$o�P����|S��J|)�)<����k�X�:���w��f��|�$ѥ��oo���O����#�k��%����h����������=�u� ��7��kھ��|.���i���6k��㯍�N����Gc}�j�w��~��|%��q=�����w�U��5��;� 9>�����uU�W��f}N�F���kd<9�Kyyiu�����^�]������~+�.u
� hk	��X�uV�V������x|<+Ц����R-F�F&�iU�hT�MB*�8BiU����Ӕ��?����*U%��%���*4�9�T��s|�����SS�]����⏅7�x�]��oj?��kSЯt��&��i7��=Ƌ��kTӵ�L���[R��'��m[ĺn��5���u�Z�����D�v�m��F���s%���6�Z�O�u�<Q�y�5o�2X��i������!�]�Mb�->��}3�Z��>����e�|s�}|A�h^����<5��铯�|c�x^���x�Bյ�y�Zꖑh�x��v�d���#^��ŷ���ݵ�����s4�73Kqqq,��<�4�O4�d�i�r�$�;3�#�gv,ĒMgøE����yU��׏�jN�"���
�B�	�V�XM��͉�7�#*n�5�V���� � yM�(�ӕ(�'R	�s���	E)MZ�8���J*(����B�(�����|�����i�#О���[E{i4�s�_Z^Y�W�Vw3C"��FYg�����?�?i� �c���U�����N����{T��|R�ҒX�c�d����บ��=3U�� �%(�3� � ��㸔[��;�:��'����ǋ�6�=���D��].�J����S����<� ;���܁^�-��AJ_�hF*̡5��+���*20�r��Ehj�N��4�3i#P�[\g�:p���F|�|�m�r߻ +>�>��!�e�-�������Z?���b���P�O����[��)>�&�����E�M���w:�a��hƗ��=JO�u�/�� �/s'��wL�}�;Yן�O�~j�Ɵ����~�ǉ|/�5]C�Z֏�jsxgú��t�i>?�O��ƭg�I�h�����/�~�|����-K�׉��=�}|��X�|5�G���ko��i�~��?���]�����ϊ��j����ڞ��];�Z冋��Z����X`�?*���V�p�(�Bug+ʝJO�P�Iքa^	ZX�V�����=��=UNk܇���E�s�"��/d��P�n�J��9��y_���l�w��� �5���_K�<�:���]c�I��VJ5�R�v�]мZt��.��w�D:7��kK[m_D���M����� �'�mX?oo��7�;�f���j�>.�ږ���ˡ�x�Q����e�e�i~8��H���q��<;���j�U����Hk�-'�|s�w×��x��Kl�7�����Z��a�x{G�<K��-z��Rͨkw^>8�߅��.uM|Gu�Q� �h�� �8~�^&��|5���|R����c>��x�ᆿ?��1a��:?�>���@��߿����"�.�����Y�&+�7��T0�qä꺕���'	���Mb�9�U(�U��8�u�9�S�u
��Uԫ�]C��q�Z�=�}�c�4�%)rF0���[� m���W��Z�з~9�|%�w������x�T���д�C�>#��폆.o4�Iu���}CK�%���o�H�%e�M.�amu?�xS��;���|�
5�4]ķow`t�x�S��;G��M�xjM��a����4ok��h�V�x�,c�䰰��/.<e�ï�;��F����?푭x�Q�i�]�>-�a�K��.����ƭi��zK�V��]n7�Ae���j�i6����<]��7�h���K�o>���D�5��M���Z]�1�P�5u2�Ú���,t�.TXﬓL�f��?�b�W�]WR
�<D������iJ��kՔ*S��{h�0�x�l��P��F�_�J�,���)ҏ�!W�{
�4�*���Fk����>zhɧ�q�9/���~�<1��=��!���'�4����Es�*����KW��qů���nu��Z���IE�U�?d��.��}��m#ºe���\w�i�Q_��Z��ZG���H.��e��/R;�I �4�2�&��򘵀�7��Yԯ'QJ5_��:���R�ԣNP���9B1���w�8���R+���)����c.W�-9)J�c&ܔc�`��+�8����`��:��~ � ��~�->6^ꚣ� �
k���!�^���;gŖsC=��u=n�Z�6�����i��n5{}+Zյ]2=?ĭ��-�Ac0��!������Uv4KO�'���{ֽ��-%����wO%���h߮����g�
�� ��b/�:Gÿ������m��滆��Z��߅<ug�y��~!�~���@�e���xwX�u	nm����������?~��~|x�&�����?�(k���M�c��&Hc��lY���WҞd��4�/P���Y��?�<K��~�eC�Uƙ�&��'�c(<��xP�ø��j֣�����U��'����,~.�(�0u'����u��7����_��)[����q����c0����W:��:��N�gG�����
kB��<DW��C>0������ >x#ÿ�'�߄>�����F���m'�4� �7����eu}�i���co.�����a��(c�S��𿆬������Vz��
Mޱk��[�F����P��.�3ȫ$�l�溫>� ���~�~�G�5����c� -`� J��ἇ	��Uù}\UlO����O�����V�㇆#Uʮ"�:\��^�u*�s͹I����8��q�gx�xzX��<^*J0�ᾱVδ���N�*T権SJ�� �RG�Q^��}9�?�O��_�G�à��,��	h�':b����2Is�/h�n��M���j6���4A>��xm��k�2���U��������� �-m���.�y�x�o�A�9w~��֙��I#T�C�Զ��R];�8[D�g���W���<�7o�SX��9�s��T/*r�H{�W�	�Q��$�хv�RZ�r�N�/J��zIJ/I�$�{4~��M�?��Ai���
���� �������5�.� ��,Լ#���/񯆮����jOy��j�������^��G��I�=�g�� d�!5O����To���G��|<M�{�S¿<i�M�px�V�!���| �E�4M'�i���^��|Z�S��A��y�x_[:d�%��{��5����� �w�|�߆v�u��l�+�{�w~$��4K|u$w�~������v���Y���$��摢�e�Ѵ�:�M
���տg���7�O��ῌ|3��ῄ�~k�~/�Ŗ�Έ4�
� I�<Qg��<}�5�:΁��o����mm}�\xo@��S�2�Zŏ�I�˪C�S���CUի�TUj����D�:�]lO��KN8:�3<L���i��(�b��*��J
��rS���t��(R��U$�FƢ����|�ZE��j�o�W�xW�,��>�mwc�i��͞�ڎ�aai��Ci���[�����$�-<�������st����1���^�jx�V�m4�{��ڗ�<G���-�y�׵9�Ma4��M%4o��M{wc��u�z����������a���<;e�������=��w�t�C�6�7חþ3�m��M,��[������׺�Z��E�V�.�,��/�x~��z���*&��_��{��m~�Kmv�[�RV}���5�bŵ������;�no'ѭo5{t��1�<U55<T0���(`T�M~�R4����R�y�Q�TXh���J1�*R��P�a�8ڄ�
?X���u�U:����7��h�:u䩹T���ԧ�?.��5�]��_𞟩2jtZMӘ�_L�����\���y�ݤv��nmg����d'ɫ�>'��מ��MOI�,��5��^�����_^ա�4�Ӥ��p��:��#T�'�A�Z�k�j�i�h���%���cQ�Z�Jucҫ8�J�&�%�}��k5%8�jP���P�1u��#N��	�rs�6�4�����rM�R���(��� `��>���F�V�X�k���~>���BI'����KT��.�z�x�QӴ�Rx�9�ҵ魤K��5�g�>���sW��Ȳ�vk����g��S�a�Wxl-9Μ*b�.
���νJq�⛒yV]���,W�pX��C	JU�(N�H�U*�)8Ҧ��U���i�M'k4�W�?~��Þ5�v�⏇�9���g�|/�=�Q��4�yi����w����[�u�W�1��t۰A���"O�'�+� ���ϟ�� ����%׉�M���� �Zݍ���_�z�Cg��{qll��W�=���E�]�:>���,z-υ�)��R�M�$�A�'�ox��7���5��gQ6𭭅��|Z�ZM�x�L��k$��4-"�c��4{+2�(m- �8���� �G�^ʗajp�d�(cxk�xWS���ECϓgt���c2�8�z�<J�CGN�6/��� �[_�>k�b*N�3+���,�ۅ�Xnj��^tmj�s�&��Q�S��
�� ��w���y�;�Wǿ�?��f��ߊ�#�_xX��m�5�0��4��/�#�(����ף���M3T�mn�i��F������� P�f�g��w�?jO�����ax�I�G���?�z޹����I>��:_�!W:��%�ɫx7^��X�~�&�.��i������� 2~1~���	��YR�	�T.�yc�v�Α��n�&~Dg��H�~��e�.*\u�O��0���I�ɰ5��Np�m��C��b8[�ja��p��/�c)�tc�էJuR���%�q�C�ap�?�<6�S�x��:�f�W*��ʘzY�]����hT��t*]�Fr��ڃ�4QEL���}�*闷� �˫MN�@�F�ߍ��Zipks�Z���ZƁm�$Ѯ����[Kյ�2tӮ����d�m=�1J�/�u������gůEi�mW��������o�4� 	x��z����׈�|uq�뺖��ξ��}��������J�;H�yu-7��f���E�G�Ea�j��eڣT�$jJo�5J1��V��Mo�_����%�4����ҼS��$�}봣���>����?|c�x�ƞ3�����"�u/ �s�
��W^;�Α7���߈�h���Ğ�/4K�k�厽�7�V�4�2^��r�}}�|G��zO���G�O�\�W�<Skz�:����Ğ!�u����s�������5������� �k����Km%���=�?���!�{�σ�������w�� �_Y����2�N����~,�^�5��I���G�|?�/ĻH�o���)�>��/��W�b�'�4;=5�}{� ��>#��_�S� �gú��������_�C��<C���|�^�H������v���}�j�ll��<W����~�5H!�ioy5֭�L&'Z.�xb�RX�8��sT�b12t�ӖNX|d'Ξ���G>d����^� �Jn�5�M�<ʝ4�9*ӗ��(ɩT��U[���������Y�.� ��i� #�֧k�����c��>-��kM/O���2��᷌l$H���;P�'�}�k�������Uק��&�N�����Z��1�j�j^)��<9$���ot�2�I��mJ����N��㵊K��X�d������;�%���i6�v��������O���('�������OR���?j�ߴ7�k-2��iڊx�ᶞ�5����#���!���`󭬾2>���x�Չ��L���x�R׮O��ҼG`���xwF�^����H�m�mf���#�I��\nH���[�gP�7r?�޾}��<U��HЛ��iZ�Hի
kZ����kBSu\mO�Ǒ��n[e�q�gJ��wS܄�Ӕ��*�+���:ъ����$䥢K����Ǌu�b�?��A�	�H���F����dWa�kkI�]?J�ץ�%��{'�uOjЦ�m2������.��M�����\�iu21���F�T�<nԀ�����C� ��p���w�E�����?qjo�i��ٰ[�֒j�e����� �7�^�������:����	�V�9|�Ǿ7pY[}��H�֍gqcs�۫�5K�ú&�g�Gz��	/|�$��	�	5;9���m,�{mW��Q`�4�P�8?m������5N8��h���Q���T�LRúXwZ��FZf�H����V�oVj��u���<<h�JT��)֡B���+*q�Z5$�
����~;����%�O�5��U�m}�<�SJ�$�ktC��.h`���7:^����giG%��oj$U��|�E}&�`8�#�8{5�J�ny�cr�tiTtk}W����*�yP�Ts�^���X5(&xY^e���,�6�J���6;�AT���Z�j�vUiJPQ�J^�JnP��&}��Z��??f-vmz�K����?x�n���焭�]��|�� ��r�� \Ғ}?Aק�e���6�%��u��KjZA��n>y�E�/�ǿ��;���o|F���Bl�1��_�d%`�s��aJд��i�=j��N�L�su`��_���
�\~�zsx���gG�t�M<�׬t��,Ir�%���)��mt9oec-�χ��u{'�u<� �I�� �o?ࠚ���N������ծ�%��]0bG�kz^�i��L�ZE*1���a�mLG�y^
YF'�ߊqt��|�M���q�䥍�xO�.6QQ�2�Q�1��+J���/�ᆧ����I���1��m���IU���"�s�R��5L6U�8� ˔�ɹCS1���F
��ɩV����/�/��ſ�.Ou�FjS��~|<���i�i�� �V6vֿ������� ��������A����v�$�wGó��̿�?���l�)��N/�^��m�x+�^K�t���>	��Q��5=[T��6�jZ��ġD�fKU��Y�O�� ~+|t�eǎ~0�@�W�o�B��Y�^�u�\[Y���i�tS9�Ҵ�^I3L����F��G-��x]�G<�3�~%���o����3���P�`�X:����k'������X��Yl3Ej��c�)R��:'��I�g����Z�?�Y6��v������4a��s��X晒�aV-�)��	Ԯ�F�QE�����;O���+K���u=N��OӴ�(d������-�,�-�V�{���c�cV�Y]� T���>��h<���*���K\���o���=�:����z��'�u/��6�h6��[�oI��2�>��x_O��o�o/�ڎ������~"�@�����⟉~%�I���n��X�&�������M�X����5������:f�m{+���)��5A�c���e��
��o�������|U� ����מ:�O��{�� �.�ZI�[=xO��M���o��$�"�$I������z� �c����p��Z��L6.�J�H��T�*�\�i���������Ք�:��U���êqU*��˕�Δ�^)Ƥc�e9$�N
3�����>�{� |C�q�o�?�%~<��W�4˽�:G�-s��ε��b������k7��O�Z��.��^]�K�2x���Pk�zn��%��u���� �~ľ��:�z���� 
��x_�/�.<���U�R7��e��[�z~�����Ŭ��^��Y�Ф���O�ѧZ�I�;/x������K�ϊ�ǁ�~6��|-�þ	��č�������;x���� ��G���{�z���=���"�α�ZZ MJ���t?��� �Q��V� �w�S���ޣf���B��>6���R�X������]J �چ��D��������io7�>xm���_�x��05#]�iQa�㉕xƝN_e���Z�h!����B�V��UrZ�sk٩h�ZJ����rn�V����t�G���?����#՟�Y�L�� ���_����\��<ou�o�s��<-���Z�<k�� k��+[�៊�ޜ���o-���uO�����e���� �����O�?�o�����=;��>$h^�W�u4>]ͤ�&������ޓ�hڄ�ׇu�6km_�����kz=垧aiu���[�֠��*��g�ԓR���)Es�-���i}�.�ձ�8�����2qi�^�i7�)$�����W�[x��4:���/�/�n�M�-t�۝;8�n��sI_��u
=����^i����h�^�[�^'���O�=&��K��]���u-z��x���.��n�`�������GM�-?��m���/��c�<W�����-�1��/�?����K�	k�&�l-5c��N�������<W�kzT�_�?�K�i� �����&��h@�׍l�.|[��E�������𭽦�co'�]ľ�=������sMy}��v��K����N���*-����7꺁�`�а��e�o����BtjR�U8<:�l-z�'*/����pQ��*P���,$��bj�J�����5�:P�	��'?m(ӯJ0��>4e,S�*��V�yT�
qti�h����%�� o=�栚7��t�o�]K@Ik��;���pu{˻�+MPK=�����R�u%���^�U�������iOe���et���\FP�R�O�{iЉ-�ai ���Xd�6V?SxcP�f�_�4_i��xG����>%ֵ�_YX�k�kN��'��9{��ϩYi���%���o���~K��oUُA��Y�����+�$}g��捭]�zXh7v:]杣h�l`��u�o � ��=;H�Mvv-s�[%��� ��3��t�������ԩV0�i�i���b�)IS����8y��Ч��T�ߋ��)c#N�O�U��]8BR��k�R�&�-'�(�(SN�i֫SA�V�ʊ��S�>
�D�y�K�;_�F��F�6����4�{�;���6٘��[����S}CP֞{<P5��q�&��F;_�;]8�[�kP���T:|����˧��5�͌K-���uqb��o~��(Џ���`jE�R�G��U(Uq��N�ԣW'�Z�Z�i��Ҿ�!���-�BVQ�;ە­4�e$�9��q���N?ß�J�AE{f��N����?�|	���<(��ڗ�jW���q]��]���h��s$��q�,kc;Ϋ�m��M���Դ�K�+�x�U�<?�x�I���E�啟�γl�^-�[�r����{k�k�r����5���wS9�S���:�qMS�V�r�I':��)R��*��RjI�d�r�T�N��k��.����U&��AZ�NJ�+�����j���o�h�m���ݳ������{y9�7�O*��$��QG$���X��r���뿆� ����4�ľO�^��3⯇� ����>��K��5��5��k�J��J��K6�0��i:=�kZ�x���oS� �[��km���������?��B����(k=:�=W��X�Pռ&�5����Z�z���/A��m?S��4<w�oi�o��2�ľ4�l>$���/�u?[���>�&�.�<W�x{U�};��wf�l^��ό<=拠��0��񮑣|�/=��8a�T��b%����2t��5R�X�u�
^����y��kS�����G�ǥG.���"k��%��4d���r�tiNRQ�~ڬT#	¤0������>4�Gi����|B񟋟Vҵ�'��M��+ּ�x���N���x����V�0�d�����-<K�+w��o��k��w��x��Y�����^&�>k>�~����
�^��S����^�� �4&��~��¾��>��Y\��mBi>�&��=�{���ܾ� ���χ�>x@_��L�Ԛ=v�QռB�#��/���˘���=]��(|6���$��)��*�6������� _�w�3Ķ�:��K�|�s����(Ig�x���5-Q�7�"::'�|G��^&6�"񕇊���gM[�i:���\{�k��F9�p�+(T���USn�����f�1��Ӥ����YJ�Ll��\d��ZOg)*TS��]X[����M{&�R�� uUB�#F)rѕ��G��� ����ߎ�_�����c����kQ�����뉼%�?�z���'��(h�	�`�?�<o��Caik*�_t��!ay�ٴ�������|���~�u�� ��g����K��3�[�m/C�t[8�4�6�Y�6ְ��I�`�O,�I$��W��<2���9�R�����9I�)JOV�&���ݒVK��T��gQ�g{E$��$��$�ItZ�ݲ�(��3��1��W�A�3��ύ~��Ŀ�>Ѯ��3�z|Z���i���rG$O�[k�K	�u)m�-6�8o��[�!�?�� ��������ѫ'�_�&�ӿ�j��|K�?����w��p�=��%X��9ll�#|=�l/��
Y�ڶ��I��[Q�ѯ�M{���W&+�������E?gQ��g��(���A�^{J�I5Ӈ�V�?��J�8'h�)FOF�������ox���L�:��I�c��C�n�m�i�N�w����I��#Z��m��:&�4W��ڭ�E�ĺ-B�R�,�㿴�Y�xkNӼ!�F5�A��jR�'�v�wq�ɨEi���.�g��������'��W֮ mgO�N� \_���{� �� ��jI�?�?� ���m9�����gSo���gW�O_iV��:78��o��Z���y]��� �A� k��3����]��s�+|^�3�Mx^-fWþ��3�ī+EMM�Dk�>?|=�<6�\���~*���w7��p,���8솽L]D}�4��nHӣZ����2��J�.�U�y:ʝzp���C����c��E��jB1R�9եMQr�/g�J�iʔU':�ܳ��J������� ���8�/<0���b�\�,�uG��}�Xd����w�G��K[��:������Εp� �w#Yг�a�<2"ԣ�}��j��"�E��g�_x�J�Ι}�Yh~�iy�Y��n�m�k�?K�����O�PY����/��H�*����u�%~����м:��zǈ��;Ծ.�>'���xfD��S��Э�Hյ{�
��V�;kl��c�����O|&��u_[k_�i��Y�{�Y��ϮxW��K���z�6�h�ց��.��P/�'�&��8��'�-+OFԭ�������⠩�}�9ҧ^�.���?������x��Z�*�Tڎ�<4��[
���hb�^���^�p��ӡ*��tqF2�_a
��
�u&��9V�T��ug����+�k������Owi����3�xoUԓ��x�]��֯5�-��5֏��Z̚DRZYZ��1������ƚ.�y������j^����ZK?�{«�L�q�O����ؓÞ(��<}'�|cs�:&�sj��^�>�ms�����c��j��?㟌�%��=��tz'��]�O��z}k��M���-���5�Y/"�&i��M/�����̆��φ��G�*����D�+���h�/
_���/�%�g�W�!�w�d�4�[�׾4x���.�pWY�uHl�yK^�[��5���DҬ>[<UZ��T�*r�:<�ib�
�V���¬�T�(��K�.jT�bg
���F�!?�8T��jэOrtZ�R�B1�
��M�JM�oAr�c:|(�/�-�5�鷩�_?�m~�<:e�^�i���}Վ�t-R�/��k[���zm����tT�{�i�k���j:����4�x+�zX�.�g�]+mźǆ�/��<#�w�<]�#Z��-4kK	�TP�Y[j�����a�x��_�g��	�Y������?��.��[��� �>
�㟍5}:K��=W����=�L.��L����,�ipϩZ5�Ŧ�>�c�x~��H_��	�uy�O���n�m�GU�[o�o��.~ |^Ԭ�6��M��w������[�� X�K������M��G����b12�)b%	r��
�a�*�N��O	[�­z�98IAV��
r^.#1��R��9�M^��N�R�_vr�\���n�:��\��Ҕ��L����l�ƿ��%��5�EWğ>��(�|G�����~/��>6�KO'�u���ZеKc�]��Z.��])�/�:������k�;1w��x��W��9�g�� x����?�/�;E��;�h�|B-+D�4�{];M���m����(Ԗm���먯��a(ac�J	IƜg?�?eJ�����S��ѽ�nf���֩Y�r�NN1�iJm/���v���
(��L���
            [firm_left_thumb_ftype] => image/png
            [firm_right_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��I�z 	8���9$c�'����Ń�3'g������x��������>�)< z~c'+�sK�G\t=?�篧L�����k�O�M��?�Gڢ�`��l�S�?�y��Z��ר'/l}G9�p~����*:��'�H�!Q����X���������E��h}�����t?��M��C�������4c9�q� =�>�2x���� �C�a��~�Lv�Gğ��>�I��o�|-�[�~�Y�v~#�t�
�Z�$i���V�jWE�G��i�P�W��P_������F��o�=�z���u��0�ugsZ� �?������c;��H���5�a6Z&���̾��lo?�G�����2��<K�㗊��K��v�i��3,�x/F��o�|��,��^��1�ion~�u"I�j�ڵ�����^x/���Nc_,� ��ѧ��
�Uq������򭇍JT��!�P��h�U*�_c���<�8��֖�ܪ�&���ٍ�֭�k� �����9v6�1R ��s���)~��4��p� ��{�װ��C��-��xK�0��|e,�Y�<;�+�g�o�i]�u����C֯egy��^�V�12���t�G��O���+(e`T��  ��z��2 ���q�g|�V�s�;sU��F_T̰|�C����kQ���z�Ԫ-#)u�qT�t�V���BV�2_��KTG���yG����s��h�T_���y`u����=��g56 �s�����3܎1�Gy0�9��I9>��}|q�C��A's��l���}1�ޏ�ş�kߟ&a��.��q�ҥ��<�<d�u���ǜ��N��I��|�&� x�s��=9�� ���5*u��I�6�A�r��K���_��?��N0�?.?ڐt����Ӡ���@���� ��cn��bz� �ן`3�8 p1��x�<s����� q�9s�t<����gv�zg�c�L~]{��^W��89�O_���R�8<v�I�`_q����7_��~�c����n����A����4 �㌨�7q��O@?:������~��?�]���F���ڴvm�D���Ir�� b�C��2�Ե�n�3��h��Q���M�����>5|h�m�<�-��O��(����h��^!����������>� U���M�4�T��SԮ���"�y�C�l��T�)'ď�(��)�]��C�|=���gጷ[��ti$���6�mo|q�h�}f��i�����Mg���� �x[��8殪�8k-�NY�a�*�I�-�I�Yc1���(��K��R���k�َ>*ZZU�Ji��M]{�췛\��5㟷_�������|h��z֖jn4������o�8�jܴ�^�@���l%߈uǊ;�wU2\ȶ��i�_��q�<g=����Rm�wu?N�� /N����#�����x�����tb�F�����G����H�4Y���m�-��')��/#���J�]kR���T�b��ˈ���<,�5|\!��8/���n[��W�ݔh`�Jp���MT�b*N�|��թRU&��J�F?%�R|ө9���k9Y��$��VL�M��܃��#�c\���� �?�M��_�����b�6^���{��K]7᷏�+�0�����Kq"���4=Yγ�޳���@�`��O��گ�?���j���X�]�&��Xt���ԭ���������W�ѵ |���n��SP�deX2�B�*J�pr����H ����~�_xN�*�ib�8����Fu�U�S�a�%�^�����gB�i֧Rt1��{8�/��)^�I��_}�4��%��������Ќ��=��<w\�9*q��'�Q�nf����!���~#G�_�����YO�pCk�|����	�� U�O��5+�|m*�xo�r�tq� f�3����O� X�$d$�r3���1�g��r�g|�b2<�%Zw����RxL�	)5K��$����N�(US�Z1�	#�p��X�Q�I�=%�S��p���דVi�����랹9�_��4��r���r=G#�^�x�HGL��a�H�=#������Oa���:�s_&t�'�Os�8�Hǯl�q�!������cv���<����z�~�?�#֘�:���?�n:���zz���� I8�#��>^9=��� ק 0;�ON�A�G���l��r�[���q�c�/a�#C���#ۧA�.��?��Ӧ}=Nk���+�� �� 񿍵�+����x��Z��:~��h�e��_j���$���D�H�� m
�@;�7ZA=���[�[E$��"�bC$��,���q�I$�ʈ�Y����p�గ�׊5ُ�v��� �/�5�_x�L�X�㇊t��Er�FU��q�]Fe���^#�x��e��BH?A������\��W�R��0����Pr�����h���9eO��uf�9rУ^�><n2�
��=d�ì��Eo)tZn�:� �b��'� ��|P����_�ʿu���A|; �O�����4���W���d�m�m/�"z���?�sm���?89�� ����:2@���>��+����p�w�A�@xW���ߌ>���h�ω�}�/x>-;W��3¯�{�+m[��q��Vp�y��>��[���\�/�A��p�px
Q�rL��S�:����<��ԍ(:��v*i�\��\Ey�S�����ζ2�4�5Z�KV�W�-]��7�J���ԏ�!��~������� ���eυz�E4�B���7���[��#j���������h��Yxb�k�o�7����� ��|J���� f�>�E�C����Q�_�������4���T�|?�iz��k�h��њwk��nm.�l�#���o�C�T� �4�|3�o����� xC�����;�gÅ����6�V�!����S%�t�����^��-��9���?��?
?mڏ��b���]�޹�6K�x��|��}O]�u�����zCx8x����חSE��){af�f�,iyqݬ6� ���O�<S���r<�>���S���S�b)��d����U)�?��F�\Ƶ9:�£	<%������n����S�E�'�E>ž��D�j\H�$��	u����-X�����ʢ�����W�ƣ�G���x��<g��>�n��[@Ss{���4z<:��~!�?���x�V�e{�:�t�j���d������?�y�����?��tSg�il���-�Sx��S�,ZW��-{"�s���w6�E����s��P�yl��� �&�����5�z����1x����K7�>#k��~Xi�[[+]&�C�l�G�ȴ��� I/�y}�O����wQi�k� �� �\� �D~��8����/x��K�[�/�o��'�|	�y�Eă�4�R��[Z����<Qj6�Aqm-���麅��_G~<����yOd��#(�aM���c*��q�,s<)QpnT�����q�%*�x�Ќ+~���]��_���9>_����VX��j�?i?���,��ZyC��G-��qV��[���[i����[{�y#���	��Ya�	bd�9��H����Ȫ������ ��൐|i����[��!��e�������{(����FfH��=�
��N�tcoC6������ �<��-����j�τ�G{�Mf�I���W����n���|7�}��M��}J٢����T�c�A{mg}ͤm��Սխ����W�s�ygyi<��vwvҬ��6�02Ooso<q��O�L�$L��G��p.C�Og��T�?�dٽ�x�z�ԩ�(���\5h�,NR�<M+kN�(֥�>[[�vj)��3�j�i-$�啛��G$� �`���3�������.��� <g��GrI���� @� ��C�GYx{�I���A���2�=7��mJT���6�anLZ�3��?��u��2ʾZx��3u+���-� �����s߃�'>��8������#�pNw�ȳ�?���|�kB��c��rTq�:�/kB���J�jP�
u�T���bib�F�'x�zJ2�n2]��ut�hB����מ��wS# �Nw?������=>�q��pI�zq�瞃�c)��H���q����6��\~����q�q�>�9��<Ҍ�� t����>�A�4����'�a����}�:����<t��O�9��\cP3�c����?��ߴ���k��-WZ��-�]CP�w�����=��%�c�"$��>կ��Z4�gVB�F��:��߿Nz�����ؾ|z����K���/~3�,�e����w�-���O���u�6ڦ���Q,�B2K�g�wr�{Y�lm�5]���;��?��_�P��u�|2�G����乺��?��x^��>i�4^#����麯�u��x��͠����m'T� I/쟣w��E���y���Y�+0����sZԲ��][	���8|^*T�Ԗ���^�9*�7G����^�ZuiBU��R�4���Rr�1��2���V�����Vz��Npx�	'>�qB���b8�{��u�?�~��#w� ��U� ��~�7~�n(� �7�P?��~*���}x�?�7�����׃���H2��l<?�b������[�����}�����n��p=����+��߿�'����X���F6�iM#I�^���f�௄�R�o��̫qg}����ٖ)#��F��"5�A� �� ����0�������|I���?éǞ"��>��:��yl��-��oT���V�]/u���>�5	%[�J�_��(�(�#�4X�5T�DU�""�*( �����?���x+��,&;�T���7.���a�JR�e��a�T�'*��/��T�pm�Ղ��\�P��U����F���K��,�kOv.�g����+� ����~��6��'��]���L�m�X�=��}��_���<�M�I��lGo�u׬3WzE�6[ۻ��-߿�������?�/���_�����~+h�k~����k�P]�=�o���"�Û{@Ԣ�ִ-F5�5kK�����~0�����(x��>��<k�S�~���xg�/���$�����4�z�� Z^�5판=݅մS��������H� _�g��nië �����:Tp������3��T�������S���y�J�V�I�(sf�d�_�a�Jt�6�t�7N����o�m�'�|�D�� !F2y$�q��� O9�ӧ`���c�>�=���L����T� ���S����� ��v��#�j_�sw�����\� �߁���]�}�k�?�׃���H2��l<���� e�� �j���?��ko�/x�Ğ���U����?�����xZ�Ny���ZN�m�h�6M-�:����l���@�<�N�5�Ώ�\jp���q�YO�[���{-�Ow$���gA׀2z
�/?��?�@�zƏ����+�|;�W�]oN�_��]kZ��S�i�h3��<9��.��M*�}F�M����u��Ӯ��5�d���4O�^�'�|[�U�U�|�D~0��L���5�W�4�P�S�h�����V�HY��J����mm��)�?����a�qVm��8{�Ϳ��.cW3�0�'�������K��h��N�HNt#[N�'����d�j�zUeZ2��N���{�m˕ꮤ쬝�{Y#� ��ߎ��9���c@��es��n�Î��O��� � �ǯ9��`�q��䏚A��zw�=z�f=����qC��+g���l�8�<҂v�w8�:w=z��^[ >\�� g����>����q�����q��d@��O�*w�y����l���F���W����?ſ����%�|I�x�A�yg�况m$76�7��B���ME��B�e�O17�O���@��!w�?�K�x�g�a]>�~�N����=k)��շ����>�S�-$Rڛ�����M�xm�=si��=�g��rz�󎧩��_�)W���c����|k���V���G�E�xO���
};�E��������9t���k�	<�s������性�f|���
�&��e��,χs�T�ܟ)��C/����.c��ףW��=��kҫ/OJ�qX�Q���aV)Zq�}�{sFJ\�/�4� J�!��%n����E�-��J����� ��?�������?�K|[� �@~X�۷�� ����V�e.:� �e�\�����(� �]o��+_����2����G�q��~���}� ����u�y�?��� #��y���� �%� ˏ�� ��� �J�1���_�e�-�u�G�y����� �+�x���|[�O����k��� �]o��+_���9|W������ �0�.������O�� �������a�ڏ���� G3� î���� '������� �K� ���D1� �����G��ű����#�|�� �+�� %��8�E�-�NO�R�����w?�_�������� #����޸���� �]o��+_�����_���Gz�Z?���<�� �//������[�� ���/�\Dg�� �V� �u�Q��~|[���J�^��� ���J��<T:�� 
[���� ̠1������������k�R���+��Gy�w������� Ek�R�@� ���n��zq�� U�ѿ��g� �\��S�O�����O�  �� .?`�k�8W�v��������}�W�A�__Ӿ|<���x���'��o\C�������ZN��$����o�V�m����ֶ��v�[����ş���˟�߃~�:��>#]�ߍ~3|Dծd��>"�c��?|_�j�7_o�&��J�t+MM��F��� �� ��Q���jO�#���w��  h�|)�~�~+�ŷ��p�t�'���V��$�ɢGi���ꚢ�?ؤ�m�������u��@�߹�_�x�_�2��8S��ML�)���g�z����s�T�x7^8l,~��a�UӧF�:R��kʢ�V�j�(�9b1�P��:T��i�Y�IsI�T���n�V��&H�02;����s�M�;{`4���l:�|��i��C�����:}I�L���ώ��pG��'�3_��U�� 8��F����9�� ��:R��HǧR��^�F(s����� ���z~>����7�q�1��^����9��G94^��x#���ӮG4��0ߧ�=��$�FM `rq��$��}:sHa�T�� �׷��?  �}���<�� ��c"���=x!y��یc��)���z� ���@�\�'�q���8z�s�3���?�.�}��C�_�(��:O�;Z|U��|����o��ś��5ּ-��C]�m<��{�r�ZC閺�6:=�����lmd"����[�
i�Jx��_�QxS��пlO��?`�|}���_��t/���7��8�f��G�-~��F�}�
�ZZ�wR�%׃�|=g�A��Z�ɩ��?�)��-�?�������0xO�����������x��W��+�c��7�,��6�ö�#�ɚ���חk�{{Y�L@�%�����?�Q���-�e~�� �w�G�_��������i_~x@��ag����v��MkS�Ɲy~Z���Y�`�&���X�M��_�-8�]���y=-u��}~	��� &���ς�M_|H���#�����_�C�������U�+x�������	���|Y�k_j�/ï
�#�:��</����ŭ�]>��ݯ�%o�o���?��ψ_~;|��|A� 	g��7�?�4�Ӽ?�O�7��P����s��J�Na�w���-m��R���b|/�� �8?i��>������� �W�>&|���7�>�@�k�3�z��O����tI��l>(�� ����]�W�B�Q���K���B��oV��+���� ���[��1��_#����� �O�w����7�z�� 	M�������ZE�ޝ�?
�֚=�6lW72����{k Zr��];��� �5��l�1�Ooc���0�w��y#��G#�'�Nx����q��W��Ԍg=��2rA �C���sߧ�Ўq�����~�`�����Y��4-}6�Wִ�*�Y��O���u[)�K�^4��O��h���Y%���I;���.ls�=Ͽ'�'��@	ӌ7S�z���z��=�����$w��}>ǡ��7��ze��ڍ孅��f[�������5��f���(��4��2#��JԴ�cM��t��=SK� [�GO�������m��-�����x�d�hdx�FWG!��]W���%�����n.,�����/,���3B�ͫM�+qa$&X'�H���
7���8�K�'� �����>"���^7���>:��k��E��c�_�R�w�lO]jwp����ï���j�!�:�?���ƙ�n֫��w���$�	��3$ysG���)T�r>>WP�`f�P�o�E�<�7��� ��<9���ë|A׼}�߈~5�_� �u��ީ⏈7����u[�cH�Ğ+��o\6�h,<E}.��>�bx¿�W��v?#?k�x��	��c�_����{m�����}�/Yx�ƾ*����'������X|}�%����)�SV��]{V�5�\���j��J�M[�sO�>|X�E�Q���d_��M�����(x��?�|u���ޙy�/��� g|Q����z��5��~%�����_�/�^$��m����4=��h�~�x?�&�Ꮗ_>�:'�~,x⟃?�[|A������d�W��Ek��X�>��g���o^���Dֱ.��Y����jZ����M�j���s����~��Ԣ�}��o뚦�e�W��?��:�������_�1���k�ޓ�[˛�-"��Y5_T��Sw�`�O�:/���G����O�]���_<m�N���&�?�� ��n��x�Ǿ	�%�ƿ����~���n�U�H|5�-;���_����Ŀ�~!��A�!ԧ�_�)�o�?�MMS��z汯ꟶ���o<%�|C�~i^:���ŏ?��Qwc;i��� 	�|=�}�^��K6��-�@y���������k���kr&��z��:O���P�7�._⭧�]sV���k!����H���o��*�5߉�� k����=N�������٫�wǯ��o��T���/��G����+�㈴��=f��B�����蚞��� g�_鍧k:�f��A_��~F�w��?���Q�|F��?g��~�_ > �V��+���>���U�Bi����WKӎ��ٮ������M�Y��-ig��K?%�?������|� ��|��s�/x�	� m��� ��S�J�࿈/������|W0j?�����t�-c�Ɵ�?j����M=/^�T���ӭ�Y� S�%~���W���t���Ox�Ě��!��F��r��������~�j�Q�</��x~�X���=}�WYֵ������j�Υz��K?��X�3�e�1�V{��ï�_>
���/�|O������o��`�Ԟ����ƣ���5Mv�M�5?�~&"=oB��χ��/M�Xd
M.��t���G�?������C�jV�u�������F�Kxo/�������1�&��~��L�b��aW��� ���� ��~>~�?�O�|K�+A��t�{��ǿhZ��i����O�>*|�I�8�[��K��k��+�>>��]B��m2� �w�M�#��~(�ğ�e��жZo��?e�|<� �c�7��Ǐ����<W��Q�7��?jZ�^����w��똾&j֒]=����Ʋ�V�%}��/�O�5�ž4��?k�>
�߳� �|?/��G�u_��&{����!�hP�777��� �E�z�r�jhb�T��y%���~X�!������)���#��-�x��,���o��g�|U�Z�-�o�g?���g��om����YZx����������ޘ��_���m_��3���O�����;�3�~"��g���|P���/��,�1��_� |����3���O��������xz�W� �oY��������V�����G�	��*j�����k�Wÿ��]���3�|{�KC���E���O�����֣�5�v�K��-SW��ץԴm'R�S���)+���S�b�Y�-�>� ��q�/|�'�7Ş"���o����*Gk���o5��&���9,� �^�<>���[��^���$O���� ����;�����_�	}�l��:_�>-��Ɵ����g���	�4� �vg�W�=C_�v��x����ǋu��1�W0��𝆌�ǧ]��������~:k~
��|'���Z'��߶��,�c�~#�)�W�I�����M����G�����C��k�,���|9�kڧ���R��G����mAaҴ?�l� `���N�a�<�����m�O�[�^����9>)x��������'��>���j�$�t'U���7H�-毧�ื�_,����Lo�?W�qa��N�^�i��|��=���O�����^;�U���|%��� ���Ï|@}w[�񿂼+��O������]]�i�Yu��� ���W�~>��_�x��]����>�	�wß�O�|{���oi�5�CĚ��φ�����?�.�=�h:������_x������|ڄw��_���N}����UT�{�^���+_� 0 �G9��?�����mO��׈�5�H�ox�����O��t-K�/�Oj2�^/��]SK�D��
���3�x�_Ӿ ���Uׯ�]F�Y�ֵq}�w�o��
�	��� ���6����>�cL�g�,��{X�>�e�����u�~�Pկ��iV�Iyy3Eo6�Q v�+������zl��ru9V�01���y���O?�1�^:�� ������F\��s��g��˜�e��>Z�� 7�?�<P"l��<���ߧ^:
7����x�y>߉�P��� �����>���׭&�����J>��3�G��?��� �?+�L��3�[� �I���i�G>��?�1Ҡ���j����k�	$���R$�����`��~�z�5����������g�m�=�>%h_�<}��P^j?C�a�?�W���V���M���ŜV����^�t�cMӤ���g�x�㟁� h/�{�?<1��.��ۮ��$��V�~9�t[!�Y|I�.��B�յ;������Ӵht�Me�/^�Ѭl��/�-4�K�E�P����`��xc�{��-�E��i�FDT��w�g�i����� �����z���L���~"��w��^X\��:LZ���)w�K�?�� �Yj^>�D����_�L�b$��kG�k��_�o�� j�7�f��_~���X��/�!�����5�[P� ��ÚoŽk�w�l> �9��� ��'x�T�Q:G��ˡ�X� I��1��'��1k�u!�͝0F���/(ÿ�&X�5���no�5;�M>}J�&KBm>�[�$� \%�ۆ��&�2��%
����yot��i�g��`>8�� ���?�?i�-͗���+��Y��2'����� ���}up�r{7�����y�n�����6�-�^��:��?�{�n��K��������� m��ڧ�� ���>8����ْ��~���x~�ⶑ�O�(��k{�> �	<`�Z����Y���ÿ�#hZl�`}?Lc3�>�h�c�4��%�7|��4�� X��tK�l���Z�;m@�֟n���3ZCw�ϊٙ��D�A(J��{h����Z_����2xW���W� ;�Ѿ3�O���m�O��?~�������x���/�{[�im��w�Ɵ��x���\���˪\hj��ԓ�2ˣ���N}wT���������u�~��t��:��-t�7�	���㞪|5��}��+o�� �|2���{��>�aae�\i�����?�_���������W��ƿ
��%1Z�yku�O�<;��u���y�jz�Z\�������cgyc�����k��K/�WJ��tȮ�o$� Z[�J��G��u]J���5mR��R��ﮞK��]�7{|�vK�� �;l���=3�g�q����<�֔�=y���}��{��d���t�����OzM���p� �מ��ݳ߹�h����Y�^l�Cӱ=�@ �����S#8_l��92?N=�?�9�'?��y���zs������VU
�q���^�X�3����PS�G��mQ@�=�B��( ��( ��( ��( ��( ��( ��(��
            [firm_right_thumb_ftype] => image/png
            [firm_other_info] => 
            [firm_bank_details] => INDIAN BANK
            [firm_bank_acc_no] => 6055720590
            [firm_bank_ifsc_code] => IDIB000B119
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"SJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"SHIVAM JEWELLERS","firm_desc":"Every piece of jewellery tells a story","firm_address":"B.T.C Road,Howly","firm_city":"Howly","firm_phone_details":"9101618753","firm_email":"shivamkar54@gmail.com","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"JOY MAA KALI","firm_form_footer":"","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"18BXVPK3167R1ZA","firm_since":"2022-05-03 17:25:53","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"image\/png","firm_right_thumb":null,"firm_right_thumb_ftype":"image\/png","firm_other_info":null,"firm_bank_details":"INDIAN BANK","firm_bank_acc_no":"6055720590","firm_bank_ifsc_code":"IDIB000B119","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => SJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => SHIVAM JEWELLERS
            [firm_desc] => Every piece of jewellery tells a story
            [firm_address] => B.T.C Road,Howly
            [firm_city] => Howly
            [firm_phone_details] => 9101618753
            [firm_email] => shivamkar54@gmail.com
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => JOY MAA KALI
            [firm_form_footer] => 
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 18BXVPK3167R1ZA
            [firm_since] => 2022-05-03 17:25:53
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��(�� (�1����g������>4x�@�u���ky����Wf����;M?M���f�ּA��3�i�֋i�x�ĺ�톇�階�ge?�K� N� ��?jڃO�B���|Y�6~��_��x��&�y�>2|>ң��Q�F�Zj���'Û}V���X��姉~ ���\�(�Ӵ=S�Z�/��F.�H�S|��䔪M�8B+V�Q�������Z��u�F�f�"�Z��H�����F��KK���s��� ��~ÿ�䗾���C�w�;�t�����;���0�;���m5/	�/&+�w�����oj��L��ҼC��v��~�?�v��C�xm���^	����\�K�~�:j�*Y�V�6z�������	x2��=��#\�s�|1��ʒ� B�9�mKP�H�M4ؿ��h�u/���<_?�_i��x��Z�?x�Ǿ,����t�:��x��ǈ��|K��R� Smk������o��S��_ƾ�S��_	t�_����4�i���߅tK��7~,���?Z�t��yiy���Rk-n�W��ѵ��E����as���
|�;;�CF)���iBn��n.
�$+b�.D�U�()aXrJj���Mϲ��o��*K�s]7��Z�'j����m;{�����
E�W|Rմ�~��ϊ�;�(^x��^	���?�~׼!w�1�D�_��|��T��W�𕮓3x�לּ3'��|��[� C���⯎�+�>Y�0���o�F�g��[��{u��j�ς�E��s�~3�|W�x�� �e�����i���O�ͪ��l2��:��<!�f�����]o➙��_>Ǩkw�o�w�K�r3��Ҽ��]+F��<}σ�h]K����/��-�����K�oH��w����/�����s���ŷ�/�|�|U��?j����"�?_񦅦�gQ��Aicm�,�է�ﭵ�u�$^x5�1��N��8C<4��jR�Yʶ�z�T*��,Zt���u��j5��N��J0�M��r��F�5�PJ��I�.�ա)rՍ�VQO�*}_��=|@��i?�5x��s�.�⯂6�<k�|4�u������~"���[k�a� x~Ut��z����\�X��f��E� ���P�fO�B��� �y�FxkHִ�x�¿~+�C����i_�:&��A��'ㅟ��� ��S�za�t���@�|As���G%�����'���|���'��9~
�"�6��� [���&�|'>?�渎ٯt�/��P�Ή{��&��A�^����=;N�𖩪k����ψ�A�^�����:ߌu���{������^�m�<k|4/��V��i�=��s�~�'���>���J�uX�����\Bx�=IѡF�<m*8��ʄhN�/aJ�bg�z����Q�,$�=�N5�
��78�s��Jt��'R3�<�_���R\�a(T�)�5����� ��>8je��N�	��/�:���k����
�u��Z�z�[���'��8��]r�Ŭt���U��������i��ھ�n� �/�Q� [��?o�x���T��|�qs���^�w���|J-����o��ݖ�.]*6X�C7��O��[P�4Oˣk��z]��M|>�4�~E�������+�c�Q���k6���m����3���k�j>1�;M{W��&��x�F�laѴmR��}�x��O|q����]�[�Z�x^�� �6���kz��4jZ5͆�w��ڲ��x��L��V���g�^j:��Ph��:�O���a�U�({w���8jJ�U4�d��~��	:j���l%F��U�7ȹ9a9{J�jI5`�R��ܒ��-�/����� �%W����������
>��į�w�l�<=�FN��_>h�Yݿ���6��o~:�?�>�
��;MM��}�[���~&�B-C����|Q�o�>!|9�N��_��K��|5��6����i� �WV7֯$R�exf�����)�nc��bO�����9a��r�����R�9S�G	��AT�gm�x�U�*��IU���|�i�4�⤯�Vm_u��QE�`�?~7|.������Ɵi�_���מ&��u����6� ��FSs}s$~�����RԮ�l-#���$oV��p� ��� �:���O�~ǟti�����v�律���J�,z}��O��B�~$�z%��W��'�m�:���-���<G��O�{�[x���prc�K��Zќ���u)�u%��]Z���{��)4���=��]z���-�y��J+�䌚����M���W���
��G�
{�8�.���O��^#�͖��W�?�?xu<4�zn���k��A����E�Em��o�\_[� �-���E����\v�#���/�>3�s�{����>�~2�1e�/xs��w�<m?�?]x^��ֶZ���u۟�[��Ɠ����mF�U��aa�Y�y�,C��>���;���C�;��tx���#P���j���e�ivg�+w�G��;H����;i:��yb���ZE�����G�t��>,����/�z���_F��|e�/i� u�_|@�6���$��5�0K���7����ZK��O�~���.��g�ƭW��)ԧϊ�ҫ�r�R��s�\2�R����q���Ɵ�>���p�<Ut�Ӫj��c/�S�)%Nj6��Z�t�N��l�������R�7#��o��G�'���^(�u�퟉�^�W����_�ĭ/���x��7�#����]WKյ_x?���'�/���mu�2[�h�)�#��78.��{�D���<_��þ����M��Û�kzߋ~�������l�MKL�|'�[kY��t���z�J�|B� �
隦�t[ϓ�g����w��U�[[�4�ZL�u{[x<y�{]I�4h�¡�l�]Q�Z��M��m����e���� &;���H������Y�ؖffbK3K1$�I'&���KR�3�^"��w��V�#���T�4��ʕ('[��)�U�N���_j4h���you��{I�T�Niپ^JI�ф��}[�~�^ү4��o�_�Z����Dx�W�7��e��7>0��m��4�=n��3ǫ۝f�iwZu���Ca�[[�_���ꚦ����}_[�L�W���/��Ե;}�t��Q��7����r&��������U��1�6W�W��+��jxZU�M9b��M�%7y�]Y{ӌg-}�F2z�[����jJwJ��i4�S�9V�E����w��'���ݠ����zf���N}j��+����{�]�֭v�^��5;�&>�Vk�|���|�۫��ЖcC��~ �_��ci��xoN��𧌴�/ln;]{S��m�V��-|ͣZ�6�p}Vqo�*��>�M�o�?u�O�-4�S�zn�u�ѯ5k"�T�������J�S�����#y��[�v6�4�̰�8��Oľ׵x�B��7�*Q��j��Y^�;(�6hfU/�2Mmqx.`x緒XdGg<�.�� �(�r����^R�c(��t9I�3�W3v���䛎'�����Jo�$�M�T�J�1n�W�Jߡ�G���x*�����'ԥ����|-���Ǣ���4O
��>��^��֑�5�m/B�E���H������D����F���xC�w��
|4Ҽ7�7V����]C���tO�>8��a��?R���u�i:O��?=_k���,�"k�N�iw{���v�~FW��5i�W��|X��v��d��oOi��?Y�x�pȚ�Q]j:���uc{qW>&������rk:2'�/�sî����JNXz���B�~��]�r��t�&*�P���,z���lO֪B�}<>b��K�-XƓ朽�"��,����缕ܰ�����(���5�G�֗co����
��a��xKO���Ś���)�xj���K�jzN��隞�sa�?|8�H֭5�M3X�_V��9�� ��"����G�3���>8]�_����R��χ�<?c~��{v�>'����~����R�?^궖�V���:���ؙ#�ǌ��8�|3}�����*�4x�&�����0MWĚΣ�x����:v����u�1�Ϧꚯ�ll�	�-u��o������� �����x�����S�c�|=񶱩��7��}���[��5�|Oa�����/xz��ű\��^E�xwV�u��M�-GR��] Y��Q���ԥ
q�Ӥ��a�B
�\.Jxʘ���_���9Ɗ�T�B�z��T�z��rƤ���j���I�(T�Zj�iS��e%J��\�V�HS��R� c��� <�[������:'���M�?�<[���5=��m杪i����Omso*:�C�ۢ�#����S��� ����&��/��↟��_ �+k�C�:�ڶ�g5��o�gO���χ�^m2�]�O�������<UyԾ#Ios�hV2|E�~������\q�Z8�IT�	T��	ʍIEJT���5+ߕ�d��ex���Qt*Λ|ь���e�)�(�F-��־ͫ7��� ����� `_�'� ��E������T������J���~!���������h�+>|4ӼM�i���͗����Ko+^$o�P����|S��J|)�)<����k�X�:���w��f��|�$ѥ��oo���O����#�k��%����h����������=�u� ��7��kھ��|.���i���6k��㯍�N����Gc}�j�w��~��|%��q=�����w�U��5��;� 9>�����uU�W��f}N�F���kd<9�Kyyiu�����^�]������~+�.u
� hk	��X�uV�V������x|<+Ц����R-F�F&�iU�hT�MB*�8BiU����Ӕ��?����*U%��%���*4�9�T��s|�����SS�]����⏅7�x�]��oj?��kSЯt��&��i7��=Ƌ��kTӵ�L���[R��'��m[ĺn��5���u�Z�����D�v�m��F���s%���6�Z�O�u�<Q�y�5o�2X��i������!�]�Mb�->��}3�Z��>����e�|s�}|A�h^����<5��铯�|c�x^���x�Bյ�y�Zꖑh�x��v�d���#^��ŷ���ݵ�����s4�73Kqqq,��<�4�O4�d�i�r�$�;3�#�gv,ĒMgøE����yU��׏�jN�"���
�B�	�V�XM��͉�7�#*n�5�V���� � yM�(�ӕ(�'R	�s���	E)MZ�8���J*(����B�(�����|�����i�#О���[E{i4�s�_Z^Y�W�Vw3C"��FYg�����?�?i� �c���U�����N����{T��|R�ҒX�c�d����บ��=3U�� �%(�3� � ��㸔[��;�:��'����ǋ�6�=���D��].�J����S����<� ;���܁^�-��AJ_�hF*̡5��+���*20�r��Ehj�N��4�3i#P�[\g�:p���F|�|�m�r߻ +>�>��!�e�-�������Z?���b���P�O����[��)>�&�����E�M���w:�a��hƗ��=JO�u�/�� �/s'��wL�}�;Yן�O�~j�Ɵ����~�ǉ|/�5]C�Z֏�jsxgú��t�i>?�O��ƭg�I�h�����/�~�|����-K�׉��=�}|��X�|5�G���ko��i�~��?���]�����ϊ��j����ڞ��];�Z冋��Z����X`�?*���V�p�(�Bug+ʝJO�P�Iքa^	ZX�V�����=��=UNk܇���E�s�"��/d��P�n�J��9��y_���l�w��� �5���_K�<�:���]c�I��VJ5�R�v�]мZt��.��w�D:7��kK[m_D���M����� �'�mX?oo��7�;�f���j�>.�ږ���ˡ�x�Q����e�e�i~8��H���q��<;���j�U����Hk�-'�|s�w×��x��Kl�7�����Z��a�x{G�<K��-z��Rͨkw^>8�߅��.uM|Gu�Q� �h�� �8~�^&��|5���|R����c>��x�ᆿ?��1a��:?�>���@��߿����"�.�����Y�&+�7��T0�qä꺕���'	���Mb�9�U(�U��8�u�9�S�u
��Uԫ�]C��q�Z�=�}�c�4�%)rF0���[� m���W��Z�з~9�|%�w������x�T���д�C�>#��폆.o4�Iu���}CK�%���o�H�%e�M.�amu?�xS��;���|�
5�4]ķow`t�x�S��;G��M�xjM��a����4ok��h�V�x�,c�䰰��/.<e�ï�;��F����?푭x�Q�i�]�>-�a�K��.����ƭi��zK�V��]n7�Ae���j�i6����<]��7�h���K�o>���D�5��M���Z]�1�P�5u2�Ú���,t�.TXﬓL�f��?�b�W�]WR
�<D������iJ��kՔ*S��{h�0�x�l��P��F�_�J�,���)ҏ�!W�{
�4�*���Fk����>zhɧ�q�9/���~�<1��=��!���'�4����Es�*����KW��qů���nu��Z���IE�U�?d��.��}��m#ºe���\w�i�Q_��Z��ZG���H.��e��/R;�I �4�2�&��򘵀�7��Yԯ'QJ5_��:���R�ԣNP���9B1���w�8���R+���)����c.W�-9)J�c&ܔc�`��+�8����`��:��~ � ��~�->6^ꚣ� �
k���!�^���;gŖsC=��u=n�Z�6�����i��n5{}+Zյ]2=?ĭ��-�Ac0��!������Uv4KO�'���{ֽ��-%����wO%���h߮����g�
�� ��b/�:Gÿ������m��滆��Z��߅<ug�y��~!�~���@�e���xwX�u	nm����������?~��~|x�&�����?�(k���M�c��&Hc��lY���WҞd��4�/P���Y��?�<K��~�eC�Uƙ�&��'�c(<��xP�ø��j֣�����U��'����,~.�(�0u'����u��7����_��)[����q����c0����W:��:��N�gG�����
kB��<DW��C>0������ >x#ÿ�'�߄>�����F���m'�4� �7����eu}�i���co.�����a��(c�S��𿆬������Vz��
Mޱk��[�F����P��.�3ȫ$�l�溫>� ���~�~�G�5����c� -`� J��ἇ	��Uù}\UlO����O�����V�㇆#Uʮ"�:\��^�u*�s͹I����8��q�gx�xzX��<^*J0�ᾱVδ���N�*T権SJ�� �RG�Q^��}9�?�O��_�G�à��,��	h�':b����2Is�/h�n��M���j6���4A>��xm��k�2���U��������� �-m���.�y�x�o�A�9w~��֙��I#T�C�Զ��R];�8[D�g���W���<�7o�SX��9�s��T/*r�H{�W�	�Q��$�хv�RZ�r�N�/J��zIJ/I�$�{4~��M�?��Ai���
���� �������5�.� ��,Լ#���/񯆮����jOy��j�������^��G��I�=�g�� d�!5O����To���G��|<M�{�S¿<i�M�px�V�!���| �E�4M'�i���^��|Z�S��A��y�x_[:d�%��{��5����� �w�|�߆v�u��l�+�{�w~$��4K|u$w�~������v���Y���$��摢�e�Ѵ�:�M
���տg���7�O��ῌ|3��ῄ�~k�~/�Ŗ�Έ4�
� I�<Qg��<}�5�:΁��o����mm}�\xo@��S�2�Zŏ�I�˪C�S���CUի�TUj����D�:�]lO��KN8:�3<L���i��(�b��*��J
��rS���t��(R��U$�FƢ����|�ZE��j�o�W�xW�,��>�mwc�i��͞�ڎ�aai��Ci���[�����$�-<�������st����1���^�jx�V�m4�{��ڗ�<G���-�y�׵9�Ma4��M%4o��M{wc��u�z����������a���<;e�������=��w�t�C�6�7חþ3�m��M,��[������׺�Z��E�V�.�,��/�x~��z���*&��_��{��m~�Kmv�[�RV}���5�bŵ������;�no'ѭo5{t��1�<U55<T0���(`T�M~�R4����R�y�Q�TXh���J1�*R��P�a�8ڄ�
?X���u�U:����7��h�:u䩹T���ԧ�?.��5�]��_𞟩2jtZMӘ�_L�����\���y�ݤv��nmg����d'ɫ�>'��מ��MOI�,��5��^�����_^ա�4�Ӥ��p��:��#T�'�A�Z�k�j�i�h���%���cQ�Z�Jucҫ8�J�&�%�}��k5%8�jP���P�1u��#N��	�rs�6�4�����rM�R���(��� `��>���F�V�X�k���~>���BI'����KT��.�z�x�QӴ�Rx�9�ҵ魤K��5�g�>���sW��Ȳ�vk����g��S�a�Wxl-9Μ*b�.
���νJq�⛒yV]���,W�pX��C	JU�(N�H�U*�)8Ҧ��U���i�M'k4�W�?~��Þ5�v�⏇�9���g�|/�=�Q��4�yi����w����[�u�W�1��t۰A���"O�'�+� ���ϟ�� ����%׉�M���� �Zݍ���_�z�Cg��{qll��W�=���E�]�:>���,z-υ�)��R�M�$�A�'�ox��7���5��gQ6𭭅��|Z�ZM�x�L��k$��4-"�c��4{+2�(m- �8���� �G�^ʗajp�d�(cxk�xWS���ECϓgt���c2�8�z�<J�CGN�6/��� �[_�>k�b*N�3+���,�ۅ�Xnj��^tmj�s�&��Q�S��
�� ��w���y�;�Wǿ�?��f��ߊ�#�_xX��m�5�0��4��/�#�(����ף���M3T�mn�i��F������� P�f�g��w�?jO�����ax�I�G���?�z޹����I>��:_�!W:��%�ɫx7^��X�~�&�.��i������� 2~1~���	��YR�	�T.�yc�v�Α��n�&~Dg��H�~��e�.*\u�O��0���I�ɰ5��Np�m��C��b8[�ja��p��/�c)�tc�էJuR���%�q�C�ap�?�<6�S�x��:�f�W*��ʘzY�]����hT��t*]�Fr��ڃ�4QEL���}�*闷� �˫MN�@�F�ߍ��Zipks�Z���ZƁm�$Ѯ����[Kյ�2tӮ����d�m=�1J�/�u������gůEi�mW��������o�4� 	x��z����׈�|uq�뺖��ξ��}��������J�;H�yu-7��f���E�G�Ea�j��eڣT�$jJo�5J1��V��Mo�_����%�4����ҼS��$�}봣���>����?|c�x�ƞ3�����"�u/ �s�
��W^;�Α7���߈�h���Ğ�/4K�k�厽�7�V�4�2^��r�}}�|G��zO���G�O�\�W�<Skz�:����Ğ!�u����s�������5������� �k����Km%���=�?���!�{�σ�������w�� �_Y����2�N����~,�^�5��I���G�|?�/ĻH�o���)�>��/��W�b�'�4;=5�}{� ��>#��_�S� �gú��������_�C��<C���|�^�H������v���}�j�ll��<W����~�5H!�ioy5֭�L&'Z.�xb�RX�8��sT�b12t�ӖNX|d'Ξ���G>d����^� �Jn�5�M�<ʝ4�9*ӗ��(ɩT��U[���������Y�.� ��i� #�֧k�����c��>-��kM/O���2��᷌l$H���;P�'�}�k�������Uק��&�N�����Z��1�j�j^)��<9$���ot�2�I��mJ����N��㵊K��X�d������;�%���i6�v��������O���('�������OR���?j�ߴ7�k-2��iڊx�ᶞ�5����#���!���`󭬾2>���x�Չ��L���x�R׮O��ҼG`���xwF�^����H�m�mf���#�I��\nH���[�gP�7r?�޾}��<U��HЛ��iZ�Hի
kZ����kBSu\mO�Ǒ��n[e�q�gJ��wS܄�Ӕ��*�+���:ъ����$䥢K����Ǌu�b�?��A�	�H���F����dWa�kkI�]?J�ץ�%��{'�uOjЦ�m2������.��M�����\�iu21���F�T�<nԀ�����C� ��p���w�E�����?qjo�i��ٰ[�֒j�e����� �7�^�������:����	�V�9|�Ǿ7pY[}��H�֍gqcs�۫�5K�ú&�g�Gz��	/|�$��	�	5;9���m,�{mW��Q`�4�P�8?m������5N8��h���Q���T�LRúXwZ��FZf�H����V�oVj��u���<<h�JT��)֡B���+*q�Z5$�
����~;����%�O�5��U�m}�<�SJ�$�ktC��.h`���7:^����giG%��oj$U��|�E}&�`8�#�8{5�J�ny�cr�tiTtk}W����*�yP�Ts�^���X5(&xY^e���,�6�J���6;�AT���Z�j�vUiJPQ�J^�JnP��&}��Z��??f-vmz�K����?x�n���焭�]��|�� ��r�� \Ғ}?Aק�e���6�%��u��KjZA��n>y�E�/�ǿ��;���o|F���Bl�1��_�d%`�s��aJд��i�=j��N�L�su`��_���
�\~�zsx���gG�t�M<�׬t��,Ir�%���)��mt9oec-�χ��u{'�u<� �I�� �o?ࠚ���N������ծ�%��]0bG�kz^�i��L�ZE*1���a�mLG�y^
YF'�ߊqt��|�M���q�䥍�xO�.6QQ�2�Q�1��+J���/�ᆧ����I���1��m���IU���"�s�R��5L6U�8� ˔�ɹCS1���F
��ɩV����/�/��ſ�.Ou�FjS��~|<���i�i�� �V6vֿ������� ��������A����v�$�wGó��̿�?���l�)��N/�^��m�x+�^K�t���>	��Q��5=[T��6�jZ��ġD�fKU��Y�O�� ~+|t�eǎ~0�@�W�o�B��Y�^�u�\[Y���i�tS9�Ҵ�^I3L����F��G-��x]�G<�3�~%���o����3���P�`�X:����k'������X��Yl3Ej��c�)R��:'��I�g����Z�?�Y6��v������4a��s��X晒�aV-�)��	Ԯ�F�QE�����;O���+K���u=N��OӴ�(d������-�,�-�V�{���c�cV�Y]� T���>��h<���*���K\���o���=�:����z��'�u/��6�h6��[�oI��2�>��x_O��o�o/�ڎ������~"�@�����⟉~%�I���n��X�&�������M�X����5������:f�m{+���)��5A�c���e��
��o�������|U� ����מ:�O��{�� �.�ZI�[=xO��M���o��$�"�$I������z� �c����p��Z��L6.�J�H��T�*�\�i���������Ք�:��U���êqU*��˕�Δ�^)Ƥc�e9$�N
3�����>�{� |C�q�o�?�%~<��W�4˽�:G�-s��ε��b������k7��O�Z��.��^]�K�2x���Pk�zn��%��u���� �~ľ��:�z���� 
��x_�/�.<���U�R7��e��[�z~�����Ŭ��^��Y�Ф���O�ѧZ�I�;/x������K�ϊ�ǁ�~6��|-�þ	��č�������;x���� ��G���{�z���=���"�α�ZZ MJ���t?��� �Q��V� �w�S���ޣf���B��>6���R�X������]J �چ��D��������io7�>xm���_�x��05#]�iQa�㉕xƝN_e���Z�h!����B�V��UrZ�sk٩h�ZJ����rn�V����t�G���?����#՟�Y�L�� ���_����\��<ou�o�s��<-���Z�<k�� k��+[�៊�ޜ���o-���uO�����e���� �����O�?�o�����=;��>$h^�W�u4>]ͤ�&������ޓ�hڄ�ׇu�6km_�����kz=垧aiu���[�֠��*��g�ԓR���)Es�-���i}�.�ձ�8�����2qi�^�i7�)$�����W�[x��4:���/�/�n�M�-t�۝;8�n��sI_��u
=����^i����h�^�[�^'���O�=&��K��]���u-z��x���.��n�`�������GM�-?��m���/��c�<W�����-�1��/�?����K�	k�&�l-5c��N�������<W�kzT�_�?�K�i� �����&��h@�׍l�.|[��E�������𭽦�co'�]ľ�=������sMy}��v��K����N���*-����7꺁�`�а��e�o����BtjR�U8<:�l-z�'*/����pQ��*P���,$��bj�J�����5�:P�	��'?m(ӯJ0��>4e,S�*��V�yT�
qti�h����%�� o=�栚7��t�o�]K@Ik��;���pu{˻�+MPK=�����R�u%���^�U�������iOe���et���\FP�R�O�{iЉ-�ai ���Xd�6V?SxcP�f�_�4_i��xG����>%ֵ�_YX�k�kN��'��9{��ϩYi���%���o���~K��oUُA��Y�����+�$}g��捭]�zXh7v:]杣h�l`��u�o � ��=;H�Mvv-s�[%��� ��3��t�������ԩV0�i�i���b�)IS����8y��Ч��T�ߋ��)c#N�O�U��]8BR��k�R�&�-'�(�(SN�i֫SA�V�ʊ��S�>
�D�y�K�;_�F��F�6����4�{�;���6٘��[����S}CP֞{<P5��q�&��F;_�;]8�[�kP���T:|����˧��5�͌K-���uqb��o~��(Џ���`jE�R�G��U(Uq��N�ԣW'�Z�Z�i��Ҿ�!���-�BVQ�;ە­4�e$�9��q���N?ß�J�AE{f��N����?�|	���<(��ڗ�jW���q]��]���h��s$��q�,kc;Ϋ�m��M���Դ�K�+�x�U�<?�x�I���E�啟�γl�^-�[�r����{k�k�r����5���wS9�S���:�qMS�V�r�I':��)R��*��RjI�d�r�T�N��k��.����U&��AZ�NJ�+�����j���o�h�m���ݳ������{y9�7�O*��$��QG$���X��r���뿆� ����4�ľO�^��3⯇� ����>��K��5��5��k�J��J��K6�0��i:=�kZ�x���oS� �[��km���������?��B����(k=:�=W��X�Pռ&�5����Z�z���/A��m?S��4<w�oi�o��2�ľ4�l>$���/�u?[���>�&�.�<W�x{U�};��wf�l^��ό<=拠��0��񮑣|�/=��8a�T��b%����2t��5R�X�u�
^����y��kS�����G�ǥG.���"k��%��4d���r�tiNRQ�~ڬT#	¤0������>4�Gi����|B񟋟Vҵ�'��M��+ּ�x���N���x����V�0�d�����-<K�+w��o��k��w��x��Y�����^&�>k>�~����
�^��S����^�� �4&��~��¾��>��Y\��mBi>�&��=�{���ܾ� ���χ�>x@_��L�Ԛ=v�QռB�#��/���˘���=]��(|6���$��)��*�6������� _�w�3Ķ�:��K�|�s����(Ig�x���5-Q�7�"::'�|G��^&6�"񕇊���gM[�i:���\{�k��F9�p�+(T���USn�����f�1��Ӥ����YJ�Ll��\d��ZOg)*TS��]X[����M{&�R�� uUB�#F)rѕ��G��� ����ߎ�_�����c����kQ�����뉼%�?�z���'��(h�	�`�?�<o��Caik*�_t��!ay�ٴ�������|���~�u�� ��g����K��3�[�m/C�t[8�4�6�Y�6ְ��I�`�O,�I$��W��<2���9�R�����9I�)JOV�&���ݒVK��T��gQ�g{E$��$��$�ItZ�ݲ�(��3��1��W�A�3��ύ~��Ŀ�>Ѯ��3�z|Z���i���rG$O�[k�K	�u)m�-6�8o��[�!�?�� ��������ѫ'�_�&�ӿ�j��|K�?����w��p�=��%X��9ll�#|=�l/��
Y�ڶ��I��[Q�ѯ�M{���W&+�������E?gQ��g��(���A�^{J�I5Ӈ�V�?��J�8'h�)FOF�������ox���L�:��I�c��C�n�m�i�N�w����I��#Z��m��:&�4W��ڭ�E�ĺ-B�R�,�㿴�Y�xkNӼ!�F5�A��jR�'�v�wq�ɨEi���.�g��������'��W֮ mgO�N� \_���{� �� ��jI�?�?� ���m9�����gSo���gW�O_iV��:78��o��Z���y]��� �A� k��3����]��s�+|^�3�Mx^-fWþ��3�ī+EMM�Dk�>?|=�<6�\���~*���w7��p,���8솽L]D}�4��nHӣZ����2��J�.�U�y:ʝzp���C����c��E��jB1R�9եMQr�/g�J�iʔU':�ܳ��J������� ���8�/<0���b�\�,�uG��}�Xd����w�G��K[��:������Εp� �w#Yг�a�<2"ԣ�}��j��"�E��g�_x�J�Ι}�Yh~�iy�Y��n�m�k�?K�����O�PY����/��H�*����u�%~����м:��zǈ��;Ծ.�>'���xfD��S��Э�Hյ{�
��V�;kl��c�����O|&��u_[k_�i��Y�{�Y��ϮxW��K���z�6�h�ց��.��P/�'�&��8��'�-+OFԭ�������⠩�}�9ҧ^�.���?������x��Z�*�Tڎ�<4��[
���hb�^���^�p��ӡ*��tqF2�_a
��
�u&��9V�T��ug����+�k������Owi����3�xoUԓ��x�]��֯5�-��5֏��Z̚DRZYZ��1������ƚ.�y������j^����ZK?�{«�L�q�O����ؓÞ(��<}'�|cs�:&�sj��^�>�ms�����c��j��?㟌�%��=��tz'��]�O��z}k��M���-���5�Y/"�&i��M/�����̆��φ��G�*����D�+���h�/
_���/�%�g�W�!�w�d�4�[�׾4x���.�pWY�uHl�yK^�[��5���DҬ>[<UZ��T�*r�:<�ib�
�V���¬�T�(��K�.jT�bg
���F�!?�8T��jэOrtZ�R�B1�
��M�JM�oAr�c:|(�/�-�5�鷩�_?�m~�<:e�^�i���}Վ�t-R�/��k[���zm����tT�{�i�k���j:����4�x+�zX�.�g�]+mźǆ�/��<#�w�<]�#Z��-4kK	�TP�Y[j�����a�x��_�g��	�Y������?��.��[��� �>
�㟍5}:K��=W����=�L.��L����,�ipϩZ5�Ŧ�>�c�x~��H_��	�uy�O���n�m�GU�[o�o��.~ |^Ԭ�6��M��w������[�� X�K������M��G����b12�)b%	r��
�a�*�N��O	[�­z�98IAV��
r^.#1��R��9�M^��N�R�_vr�\���n�:��\��Ҕ��L����l�ƿ��%��5�EWğ>��(�|G�����~/��>6�KO'�u���ZеKc�]��Z.��])�/�:������k�;1w��x��W��9�g�� x����?�/�;E��;�h�|B-+D�4�{];M���m����(Ԗm���먯��a(ac�J	IƜg?�?eJ�����S��ѽ�nf���֩Y�r�NN1�iJm/���v���
(��L���
            [firm_left_thumb_ftype] => image/png
            [firm_right_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��I�z 	8���9$c�'����Ń�3'g������x��������>�)< z~c'+�sK�G\t=?�篧L�����k�O�M��?�Gڢ�`��l�S�?�y��Z��ר'/l}G9�p~����*:��'�H�!Q����X���������E��h}�����t?��M��C�������4c9�q� =�>�2x���� �C�a��~�Lv�Gğ��>�I��o�|-�[�~�Y�v~#�t�
�Z�$i���V�jWE�G��i�P�W��P_������F��o�=�z���u��0�ugsZ� �?������c;��H���5�a6Z&���̾��lo?�G�����2��<K�㗊��K��v�i��3,�x/F��o�|��,��^��1�ion~�u"I�j�ڵ�����^x/���Nc_,� ��ѧ��
�Uq������򭇍JT��!�P��h�U*�_c���<�8��֖�ܪ�&���ٍ�֭�k� �����9v6�1R ��s���)~��4��p� ��{�װ��C��-��xK�0��|e,�Y�<;�+�g�o�i]�u����C֯egy��^�V�12���t�G��O���+(e`T��  ��z��2 ���q�g|�V�s�;sU��F_T̰|�C����kQ���z�Ԫ-#)u�qT�t�V���BV�2_��KTG���yG����s��h�T_���y`u����=��g56 �s�����3܎1�Gy0�9��I9>��}|q�C��A's��l���}1�ޏ�ş�kߟ&a��.��q�ҥ��<�<d�u���ǜ��N��I��|�&� x�s��=9�� ���5*u��I�6�A�r��K���_��?��N0�?.?ڐt����Ӡ���@���� ��cn��bz� �ן`3�8 p1��x�<s����� q�9s�t<����gv�zg�c�L~]{��^W��89�O_���R�8<v�I�`_q����7_��~�c����n����A����4 �㌨�7q��O@?:������~��?�]���F���ڴvm�D���Ir�� b�C��2�Ե�n�3��h��Q���M�����>5|h�m�<�-��O��(����h��^!����������>� U���M�4�T��SԮ���"�y�C�l��T�)'ď�(��)�]��C�|=���gጷ[��ti$���6�mo|q�h�}f��i�����Mg���� �x[��8殪�8k-�NY�a�*�I�-�I�Yc1���(��K��R���k�َ>*ZZU�Ji��M]{�췛\��5㟷_�������|h��z֖jn4������o�8�jܴ�^�@���l%߈uǊ;�wU2\ȶ��i�_��q�<g=����Rm�wu?N�� /N����#�����x�����tb�F�����G����H�4Y���m�-��')��/#���J�]kR���T�b��ˈ���<,�5|\!��8/���n[��W�ݔh`�Jp���MT�b*N�|��թRU&��J�F?%�R|ө9���k9Y��$��VL�M��܃��#�c\���� �?�M��_�����b�6^���{��K]7᷏�+�0�����Kq"���4=Yγ�޳���@�`��O��گ�?���j���X�]�&��Xt���ԭ���������W�ѵ |���n��SP�deX2�B�*J�pr����H ����~�_xN�*�ib�8����Fu�U�S�a�%�^�����gB�i֧Rt1��{8�/��)^�I��_}�4��%��������Ќ��=��<w\�9*q��'�Q�nf����!���~#G�_�����YO�pCk�|����	�� U�O��5+�|m*�xo�r�tq� f�3����O� X�$d$�r3���1�g��r�g|�b2<�%Zw����RxL�	)5K��$����N�(US�Z1�	#�p��X�Q�I�=%�S��p���דVi�����랹9�_��4��r���r=G#�^�x�HGL��a�H�=#������Oa���:�s_&t�'�Os�8�Hǯl�q�!������cv���<����z�~�?�#֘�:���?�n:���zz���� I8�#��>^9=��� ק 0;�ON�A�G���l��r�[���q�c�/a�#C���#ۧA�.��?��Ӧ}=Nk���+�� �� 񿍵�+����x��Z��:~��h�e��_j���$���D�H�� m
�@;�7ZA=���[�[E$��"�bC$��,���q�I$�ʈ�Y����p�గ�׊5ُ�v��� �/�5�_x�L�X�㇊t��Er�FU��q�]Fe���^#�x��e��BH?A������\��W�R��0����Pr�����h���9eO��uf�9rУ^�><n2�
��=d�ì��Eo)tZn�:� �b��'� ��|P����_�ʿu���A|; �O�����4���W���d�m�m/�"z���?�sm���?89�� ����:2@���>��+����p�w�A�@xW���ߌ>���h�ω�}�/x>-;W��3¯�{�+m[��q��Vp�y��>��[���\�/�A��p�px
Q�rL��S�:����<��ԍ(:��v*i�\��\Ey�S�����ζ2�4�5Z�KV�W�-]��7�J���ԏ�!��~������� ���eυz�E4�B���7���[��#j���������h��Yxb�k�o�7����� ��|J���� f�>�E�C����Q�_�������4���T�|?�iz��k�h��њwk��nm.�l�#���o�C�T� �4�|3�o����� xC�����;�gÅ����6�V�!����S%�t�����^��-��9���?��?
?mڏ��b���]�޹�6K�x��|��}O]�u�����zCx8x����חSE��){af�f�,iyqݬ6� ���O�<S���r<�>���S���S�b)��d����U)�?��F�\Ƶ9:�£	<%������n����S�E�'�E>ž��D�j\H�$��	u����-X�����ʢ�����W�ƣ�G���x��<g��>�n��[@Ss{���4z<:��~!�?���x�V�e{�:�t�j���d������?�y�����?��tSg�il���-�Sx��S�,ZW��-{"�s���w6�E����s��P�yl��� �&�����5�z����1x����K7�>#k��~Xi�[[+]&�C�l�G�ȴ��� I/�y}�O����wQi�k� �� �\� �D~��8����/x��K�[�/�o��'�|	�y�Eă�4�R��[Z����<Qj6�Aqm-���麅��_G~<����yOd��#(�aM���c*��q�,s<)QpnT�����q�%*�x�Ќ+~���]��_���9>_����VX��j�?i?���,��ZyC��G-��qV��[���[i����[{�y#���	��Ya�	bd�9��H����Ȫ������ ��൐|i����[��!��e�������{(����FfH��=�
��N�tcoC6������ �<��-����j�τ�G{�Mf�I���W����n���|7�}��M��}J٢����T�c�A{mg}ͤm��Սխ����W�s�ygyi<��vwvҬ��6�02Ooso<q��O�L�$L��G��p.C�Og��T�?�dٽ�x�z�ԩ�(���\5h�,NR�<M+kN�(֥�>[[�vj)��3�j�i-$�啛��G$� �`���3�������.��� <g��GrI���� @� ��C�GYx{�I���A���2�=7��mJT���6�anLZ�3��?��u��2ʾZx��3u+���-� �����s߃�'>��8������#�pNw�ȳ�?���|�kB��c��rTq�:�/kB���J�jP�
u�T���bib�F�'x�zJ2�n2]��ut�hB����מ��wS# �Nw?������=>�q��pI�zq�瞃�c)��H���q����6��\~����q�q�>�9��<Ҍ�� t����>�A�4����'�a����}�:����<t��O�9��\cP3�c����?��ߴ���k��-WZ��-�]CP�w�����=��%�c�"$��>կ��Z4�gVB�F��:��߿Nz�����ؾ|z����K���/~3�,�e����w�-���O���u�6ڦ���Q,�B2K�g�wr�{Y�lm�5]���;��?��_�P��u�|2�G����乺��?��x^��>i�4^#����麯�u��x��͠����m'T� I/쟣w��E���y���Y�+0����sZԲ��][	���8|^*T�Ԗ���^�9*�7G����^�ZuiBU��R�4���Rr�1��2���V�����Vz��Npx�	'>�qB���b8�{��u�?�~��#w� ��U� ��~�7~�n(� �7�P?��~*���}x�?�7�����׃���H2��l<?�b������[�����}�����n��p=����+��߿�'����X���F6�iM#I�^���f�௄�R�o��̫qg}����ٖ)#��F��"5�A� �� ����0�������|I���?éǞ"��>��:��yl��-��oT���V�]/u���>�5	%[�J�_��(�(�#�4X�5T�DU�""�*( �����?���x+��,&;�T���7.���a�JR�e��a�T�'*��/��T�pm�Ղ��\�P��U����F���K��,�kOv.�g����+� ����~��6��'��]���L�m�X�=��}��_���<�M�I��lGo�u׬3WzE�6[ۻ��-߿�������?�/���_�����~+h�k~����k�P]�=�o���"�Û{@Ԣ�ִ-F5�5kK�����~0�����(x��>��<k�S�~���xg�/���$�����4�z�� Z^�5판=݅մS��������H� _�g��nië �����:Tp������3��T�������S���y�J�V�I�(sf�d�_�a�Jt�6�t�7N����o�m�'�|�D�� !F2y$�q��� O9�ӧ`���c�>�=���L����T� ���S����� ��v��#�j_�sw�����\� �߁���]�}�k�?�׃���H2��l<���� e�� �j���?��ko�/x�Ğ���U����?�����xZ�Ny���ZN�m�h�6M-�:����l���@�<�N�5�Ώ�\jp���q�YO�[���{-�Ow$���gA׀2z
�/?��?�@�zƏ����+�|;�W�]oN�_��]kZ��S�i�h3��<9��.��M*�}F�M����u��Ӯ��5�d���4O�^�'�|[�U�U�|�D~0��L���5�W�4�P�S�h�����V�HY��J����mm��)�?����a�qVm��8{�Ϳ��.cW3�0�'�������K��h��N�HNt#[N�'����d�j�zUeZ2��N���{�m˕ꮤ쬝�{Y#� ��ߎ��9���c@��es��n�Î��O��� � �ǯ9��`�q��䏚A��zw�=z�f=����qC��+g���l�8�<҂v�w8�:w=z��^[ >\�� g����>����q�����q��d@��O�*w�y����l���F���W����?ſ����%�|I�x�A�yg�况m$76�7��B���ME��B�e�O17�O���@��!w�?�K�x�g�a]>�~�N����=k)��շ����>�S�-$Rڛ�����M�xm�=si��=�g��rz�󎧩��_�)W���c����|k���V���G�E�xO���
};�E��������9t���k�	<�s������性�f|���
�&��e��,χs�T�ܟ)��C/����.c��ףW��=��kҫ/OJ�qX�Q���aV)Zq�}�{sFJ\�/�4� J�!��%n����E�-��J����� ��?�������?�K|[� �@~X�۷�� ����V�e.:� �e�\�����(� �]o��+_����2����G�q��~���}� ����u�y�?��� #��y���� �%� ˏ�� ��� �J�1���_�e�-�u�G�y����� �+�x���|[�O����k��� �]o��+_���9|W������ �0�.������O�� �������a�ڏ���� G3� î���� '������� �K� ���D1� �����G��ű����#�|�� �+�� %��8�E�-�NO�R�����w?�_�������� #����޸���� �]o��+_�����_���Gz�Z?���<�� �//������[�� ���/�\Dg�� �V� �u�Q��~|[���J�^��� ���J��<T:�� 
[���� ̠1������������k�R���+��Gy�w������� Ek�R�@� ���n��zq�� U�ѿ��g� �\��S�O�����O�  �� .?`�k�8W�v��������}�W�A�__Ӿ|<���x���'��o\C�������ZN��$����o�V�m����ֶ��v�[����ş���˟�߃~�:��>#]�ߍ~3|Dծd��>"�c��?|_�j�7_o�&��J�t+MM��F��� �� ��Q���jO�#���w��  h�|)�~�~+�ŷ��p�t�'���V��$�ɢGi���ꚢ�?ؤ�m�������u��@�߹�_�x�_�2��8S��ML�)���g�z����s�T�x7^8l,~��a�UӧF�:R��kʢ�V�j�(�9b1�P��:T��i�Y�IsI�T���n�V��&H�02;����s�M�;{`4���l:�|��i��C�����:}I�L���ώ��pG��'�3_��U�� 8��F����9�� ��:R��HǧR��^�F(s����� ���z~>����7�q�1��^����9��G94^��x#���ӮG4��0ߧ�=��$�FM `rq��$��}:sHa�T�� �׷��?  �}���<�� ��c"���=x!y��یc��)���z� ���@�\�'�q���8z�s�3���?�.�}��C�_�(��:O�;Z|U��|����o��ś��5ּ-��C]�m<��{�r�ZC閺�6:=�����lmd"����[�
i�Jx��_�QxS��пlO��?`�|}���_��t/���7��8�f��G�-~��F�}�
�ZZ�wR�%׃�|=g�A��Z�ɩ��?�)��-�?�������0xO�����������x��W��+�c��7�,��6�ö�#�ɚ���חk�{{Y�L@�%�����?�Q���-�e~�� �w�G�_��������i_~x@��ag����v��MkS�Ɲy~Z���Y�`�&���X�M��_�-8�]���y=-u��}~	��� &���ς�M_|H���#�����_�C�������U�+x�������	���|Y�k_j�/ï
�#�:��</����ŭ�]>��ݯ�%o�o���?��ψ_~;|��|A� 	g��7�?�4�Ӽ?�O�7��P����s��J�Na�w���-m��R���b|/�� �8?i��>������� �W�>&|���7�>�@�k�3�z��O����tI��l>(�� ����]�W�B�Q���K���B��oV��+���� ���[��1��_#����� �O�w����7�z�� 	M�������ZE�ޝ�?
�֚=�6lW72����{k Zr��];��� �5��l�1�Ooc���0�w��y#��G#�'�Nx����q��W��Ԍg=��2rA �C���sߧ�Ўq�����~�`�����Y��4-}6�Wִ�*�Y��O���u[)�K�^4��O��h���Y%���I;���.ls�=Ͽ'�'��@	ӌ7S�z���z��=�����$w��}>ǡ��7��ze��ڍ孅��f[�������5��f���(��4��2#��JԴ�cM��t��=SK� [�GO�������m��-�����x�d�hdx�FWG!��]W���%�����n.,�����/,���3B�ͫM�+qa$&X'�H���
7���8�K�'� �����>"���^7���>:��k��E��c�_�R�w�lO]jwp����ï���j�!�:�?���ƙ�n֫��w���$�	��3$ysG���)T�r>>WP�`f�P�o�E�<�7��� ��<9���ë|A׼}�߈~5�_� �u��ީ⏈7����u[�cH�Ğ+��o\6�h,<E}.��>�bx¿�W��v?#?k�x��	��c�_����{m�����}�/Yx�ƾ*����'������X|}�%����)�SV��]{V�5�\���j��J�M[�sO�>|X�E�Q���d_��M�����(x��?�|u���ޙy�/��� g|Q����z��5��~%�����_�/�^$��m����4=��h�~�x?�&�Ꮗ_>�:'�~,x⟃?�[|A������d�W��Ek��X�>��g���o^���Dֱ.��Y����jZ����M�j���s����~��Ԣ�}��o뚦�e�W��?��:�������_�1���k�ޓ�[˛�-"��Y5_T��Sw�`�O�:/���G����O�]���_<m�N���&�?�� ��n��x�Ǿ	�%�ƿ����~���n�U�H|5�-;���_����Ŀ�~!��A�!ԧ�_�)�o�?�MMS��z汯ꟶ���o<%�|C�~i^:���ŏ?��Qwc;i��� 	�|=�}�^��K6��-�@y���������k���kr&��z��:O���P�7�._⭧�]sV���k!����H���o��*�5߉�� k����=N�������٫�wǯ��o��T���/��G����+�㈴��=f��B�����蚞��� g�_鍧k:�f��A_��~F�w��?���Q�|F��?g��~�_ > �V��+���>���U�Bi����WKӎ��ٮ������M�Y��-ig��K?%�?������|� ��|��s�/x�	� m��� ��S�J�࿈/������|W0j?�����t�-c�Ɵ�?j����M=/^�T���ӭ�Y� S�%~���W���t���Ox�Ě��!��F��r��������~�j�Q�</��x~�X���=}�WYֵ������j�Υz��K?��X�3�e�1�V{��ï�_>
���/�|O������o��`�Ԟ����ƣ���5Mv�M�5?�~&"=oB��χ��/M�Xd
M.��t���G�?������C�jV�u�������F�Kxo/�������1�&��~��L�b��aW��� ���� ��~>~�?�O�|K�+A��t�{��ǿhZ��i����O�>*|�I�8�[��K��k��+�>>��]B��m2� �w�M�#��~(�ğ�e��жZo��?e�|<� �c�7��Ǐ����<W��Q�7��?jZ�^����w��똾&j֒]=����Ʋ�V�%}��/�O�5�ž4��?k�>
�߳� �|?/��G�u_��&{����!�hP�777��� �E�z�r�jhb�T��y%���~X�!������)���#��-�x��,���o��g�|U�Z�-�o�g?���g��om����YZx����������ޘ��_���m_��3���O�����;�3�~"��g���|P���/��,�1��_� |����3���O��������xz�W� �oY��������V�����G�	��*j�����k�Wÿ��]���3�|{�KC���E���O�����֣�5�v�K��-SW��ץԴm'R�S���)+���S�b�Y�-�>� ��q�/|�'�7Ş"���o����*Gk���o5��&���9,� �^�<>���[��^���$O���� ����;�����_�	}�l��:_�>-��Ɵ����g���	�4� �vg�W�=C_�v��x����ǋu��1�W0��𝆌�ǧ]��������~:k~
��|'���Z'��߶��,�c�~#�)�W�I�����M����G�����C��k�,���|9�kڧ���R��G����mAaҴ?�l� `���N�a�<�����m�O�[�^����9>)x��������'��>���j�$�t'U���7H�-毧�ื�_,����Lo�?W�qa��N�^�i��|��=���O�����^;�U���|%��� ���Ï|@}w[�񿂼+��O������]]�i�Yu��� ���W�~>��_�x��]����>�	�wß�O�|{���oi�5�CĚ��φ�����?�.�=�h:������_x������|ڄw��_���N}����UT�{�^���+_� 0 �G9��?�����mO��׈�5�H�ox�����O��t-K�/�Oj2�^/��]SK�D��
���3�x�_Ӿ ���Uׯ�]F�Y�ֵq}�w�o��
�	��� ���6����>�cL�g�,��{X�>�e�����u�~�Pկ��iV�Iyy3Eo6�Q v�+������zl��ru9V�01���y���O?�1�^:�� ������F\��s��g��˜�e��>Z�� 7�?�<P"l��<���ߧ^:
7����x�y>߉�P��� �����>���׭&�����J>��3�G��?��� �?+�L��3�[� �I���i�G>��?�1Ҡ���j����k�	$���R$�����`��~�z�5����������g�m�=�>%h_�<}��P^j?C�a�?�W���V���M���ŜV����^�t�cMӤ���g�x�㟁� h/�{�?<1��.��ۮ��$��V�~9�t[!�Y|I�.��B�յ;������Ӵht�Me�/^�Ѭl��/�-4�K�E�P����`��xc�{��-�E��i�FDT��w�g�i����� �����z���L���~"��w��^X\��:LZ���)w�K�?�� �Yj^>�D����_�L�b$��kG�k��_�o�� j�7�f��_~���X��/�!�����5�[P� ��ÚoŽk�w�l> �9��� ��'x�T�Q:G��ˡ�X� I��1��'��1k�u!�͝0F���/(ÿ�&X�5���no�5;�M>}J�&KBm>�[�$� \%�ۆ��&�2��%
����yot��i�g��`>8�� ���?�?i�-͗���+��Y��2'����� ���}up�r{7�����y�n�����6�-�^��:��?�{�n��K��������� m��ڧ�� ���>8����ْ��~���x~�ⶑ�O�(��k{�> �	<`�Z����Y���ÿ�#hZl�`}?Lc3�>�h�c�4��%�7|��4�� X��tK�l���Z�;m@�֟n���3ZCw�ϊٙ��D�A(J��{h����Z_����2xW���W� ;�Ѿ3�O���m�O��?~�������x���/�{[�im��w�Ɵ��x���\���˪\hj��ԓ�2ˣ���N}wT���������u�~��t��:��-t�7�	���㞪|5��}��+o�� �|2���{��>�aae�\i�����?�_���������W��ƿ
��%1Z�yku�O�<;��u���y�jz�Z\�������cgyc�����k��K/�WJ��tȮ�o$� Z[�J��G��u]J���5mR��R��ﮞK��]�7{|�vK�� �;l���=3�g�q����<�֔�=y���}��{��d���t�����OzM���p� �מ��ݳ߹�h����Y�^l�Cӱ=�@ �����S#8_l��92?N=�?�9�'?��y���zs������VU
�q���^�X�3����PS�G��mQ@�=�B��( ��( ��( ��( ��( ��( ��(��
            [firm_right_thumb_ftype] => image/png
            [firm_other_info] => 
            [firm_bank_details] => INDIAN BANK
            [firm_bank_acc_no] => 6055720590
            [firm_bank_ifsc_code] => IDIB000B119
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"SJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"SHIVAM JEWELLERS","firm_desc":"Every piece of jewellery tells a story","firm_address":"B.T.C Road,Howly","firm_city":"Howly","firm_phone_details":"9101618753","firm_email":"shivamkar54@gmail.com","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"JOY MAA KALI","firm_form_footer":"","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"18BXVPK3167R1ZA","firm_since":"2022-05-03 17:25:53","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"image\/png","firm_right_thumb":null,"firm_right_thumb_ftype":"image\/png","firm_other_info":null,"firm_bank_details":"INDIAN BANK","firm_bank_acc_no":"6055720590","firm_bank_ifsc_code":"IDIB000B119","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => SJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => SHIVAM JEWELLERS
            [firm_desc] => Every piece of jewellery tells a story
            [firm_address] => B.T.C Road,Howly
            [firm_city] => Howly
            [firm_phone_details] => 9101618753
            [firm_email] => shivamkar54@gmail.com
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => JOY MAA KALI
            [firm_form_footer] => 
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 18BXVPK3167R1ZA
            [firm_since] => 2022-05-03 17:25:53
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��(�� (�1����g������>4x�@�u���ky����Wf����;M?M���f�ּA��3�i�֋i�x�ĺ�톇�階�ge?�K� N� ��?jڃO�B���|Y�6~��_��x��&�y�>2|>ң��Q�F�Zj���'Û}V���X��姉~ ���\�(�Ӵ=S�Z�/��F.�H�S|��䔪M�8B+V�Q�������Z��u�F�f�"�Z��H�����F��KK���s��� ��~ÿ�䗾���C�w�;�t�����;���0�;���m5/	�/&+�w�����oj��L��ҼC��v��~�?�v��C�xm���^	����\�K�~�:j�*Y�V�6z�������	x2��=��#\�s�|1��ʒ� B�9�mKP�H�M4ؿ��h�u/���<_?�_i��x��Z�?x�Ǿ,����t�:��x��ǈ��|K��R� Smk������o��S��_ƾ�S��_	t�_����4�i���߅tK��7~,���?Z�t��yiy���Rk-n�W��ѵ��E����as���
|�;;�CF)���iBn��n.
�$+b�.D�U�()aXrJj���Mϲ��o��*K�s]7��Z�'j����m;{�����
E�W|Rմ�~��ϊ�;�(^x��^	���?�~׼!w�1�D�_��|��T��W�𕮓3x�לּ3'��|��[� C���⯎�+�>Y�0���o�F�g��[��{u��j�ς�E��s�~3�|W�x�� �e�����i���O�ͪ��l2��:��<!�f�����]o➙��_>Ǩkw�o�w�K�r3��Ҽ��]+F��<}σ�h]K����/��-�����K�oH��w����/�����s���ŷ�/�|�|U��?j����"�?_񦅦�gQ��Aicm�,�է�ﭵ�u�$^x5�1��N��8C<4��jR�Yʶ�z�T*��,Zt���u��j5��N��J0�M��r��F�5�PJ��I�.�ա)rՍ�VQO�*}_��=|@��i?�5x��s�.�⯂6�<k�|4�u������~"���[k�a� x~Ut��z����\�X��f��E� ���P�fO�B��� �y�FxkHִ�x�¿~+�C����i_�:&��A��'ㅟ��� ��S�za�t���@�|As���G%�����'���|���'��9~
�"�6��� [���&�|'>?�渎ٯt�/��P�Ή{��&��A�^����=;N�𖩪k����ψ�A�^�����:ߌu���{������^�m�<k|4/��V��i�=��s�~�'���>���J�uX�����\Bx�=IѡF�<m*8��ʄhN�/aJ�bg�z����Q�,$�=�N5�
��78�s��Jt��'R3�<�_���R\�a(T�)�5����� ��>8je��N�	��/�:���k����
�u��Z�z�[���'��8��]r�Ŭt���U��������i��ھ�n� �/�Q� [��?o�x���T��|�qs���^�w���|J-����o��ݖ�.]*6X�C7��O��[P�4Oˣk��z]��M|>�4�~E�������+�c�Q���k6���m����3���k�j>1�;M{W��&��x�F�laѴmR��}�x��O|q����]�[�Z�x^�� �6���kz��4jZ5͆�w��ڲ��x��L��V���g�^j:��Ph��:�O���a�U�({w���8jJ�U4�d��~��	:j���l%F��U�7ȹ9a9{J�jI5`�R��ܒ��-�/����� �%W����������
>��į�w�l�<=�FN��_>h�Yݿ���6��o~:�?�>�
��;MM��}�[���~&�B-C����|Q�o�>!|9�N��_��K��|5��6����i� �WV7֯$R�exf�����)�nc��bO�����9a��r�����R�9S�G	��AT�gm�x�U�*��IU���|�i�4�⤯�Vm_u��QE�`�?~7|.������Ɵi�_���מ&��u����6� ��FSs}s$~�����RԮ�l-#���$oV��p� ��� �:���O�~ǟti�����v�律���J�,z}��O��B�~$�z%��W��'�m�:���-���<G��O�{�[x���prc�K��Zќ���u)�u%��]Z���{��)4���=��]z���-�y��J+�䌚����M���W���
��G�
{�8�.���O��^#�͖��W�?�?xu<4�zn���k��A����E�Em��o�\_[� �-���E����\v�#���/�>3�s�{����>�~2�1e�/xs��w�<m?�?]x^��ֶZ���u۟�[��Ɠ����mF�U��aa�Y�y�,C��>���;���C�;��tx���#P���j���e�ivg�+w�G��;H����;i:��yb���ZE�����G�t��>,����/�z���_F��|e�/i� u�_|@�6���$��5�0K���7����ZK��O�~���.��g�ƭW��)ԧϊ�ҫ�r�R��s�\2�R����q���Ɵ�>���p�<Ut�Ӫj��c/�S�)%Nj6��Z�t�N��l�������R�7#��o��G�'���^(�u�퟉�^�W����_�ĭ/���x��7�#����]WKյ_x?���'�/���mu�2[�h�)�#��78.��{�D���<_��þ����M��Û�kzߋ~�������l�MKL�|'�[kY��t���z�J�|B� �
隦�t[ϓ�g����w��U�[[�4�ZL�u{[x<y�{]I�4h�¡�l�]Q�Z��M��m����e���� &;���H������Y�ؖffbK3K1$�I'&���KR�3�^"��w��V�#���T�4��ʕ('[��)�U�N���_j4h���you��{I�T�Niپ^JI�ф��}[�~�^ү4��o�_�Z����Dx�W�7��e��7>0��m��4�=n��3ǫ۝f�iwZu���Ca�[[�_���ꚦ����}_[�L�W���/��Ե;}�t��Q��7����r&��������U��1�6W�W��+��jxZU�M9b��M�%7y�]Y{ӌg-}�F2z�[����jJwJ��i4�S�9V�E����w��'���ݠ����zf���N}j��+����{�]�֭v�^��5;�&>�Vk�|���|�۫��ЖcC��~ �_��ci��xoN��𧌴�/ln;]{S��m�V��-|ͣZ�6�p}Vqo�*��>�M�o�?u�O�-4�S�zn�u�ѯ5k"�T�������J�S�����#y��[�v6�4�̰�8��Oľ׵x�B��7�*Q��j��Y^�;(�6hfU/�2Mmqx.`x緒XdGg<�.�� �(�r����^R�c(��t9I�3�W3v���䛎'�����Jo�$�M�T�J�1n�W�Jߡ�G���x*�����'ԥ����|-���Ǣ���4O
��>��^��֑�5�m/B�E���H������D����F���xC�w��
|4Ҽ7�7V����]C���tO�>8��a��?R���u�i:O��?=_k���,�"k�N�iw{���v�~FW��5i�W��|X��v��d��oOi��?Y�x�pȚ�Q]j:���uc{qW>&������rk:2'�/�sî����JNXz���B�~��]�r��t�&*�P���,z���lO֪B�}<>b��K�-XƓ朽�"��,����缕ܰ�����(���5�G�֗co����
��a��xKO���Ś���)�xj���K�jzN��隞�sa�?|8�H֭5�M3X�_V��9�� ��"����G�3���>8]�_����R��χ�<?c~��{v�>'����~����R�?^궖�V���:���ؙ#�ǌ��8�|3}�����*�4x�&�����0MWĚΣ�x����:v����u�1�Ϧꚯ�ll�	�-u��o������� �����x�����S�c�|=񶱩��7��}���[��5�|Oa�����/xz��ű\��^E�xwV�u��M�-GR��] Y��Q���ԥ
q�Ӥ��a�B
�\.Jxʘ���_���9Ɗ�T�B�z��T�z��rƤ���j���I�(T�Zj�iS��e%J��\�V�HS��R� c��� <�[������:'���M�?�<[���5=��m杪i����Omso*:�C�ۢ�#����S��� ����&��/��↟��_ �+k�C�:�ڶ�g5��o�gO���χ�^m2�]�O�������<UyԾ#Ios�hV2|E�~������\q�Z8�IT�	T��	ʍIEJT���5+ߕ�d��ex���Qt*Λ|ь���e�)�(�F-��־ͫ7��� ����� `_�'� ��E������T������J���~!���������h�+>|4ӼM�i���͗����Ko+^$o�P����|S��J|)�)<����k�X�:���w��f��|�$ѥ��oo���O����#�k��%����h����������=�u� ��7��kھ��|.���i���6k��㯍�N����Gc}�j�w��~��|%��q=�����w�U��5��;� 9>�����uU�W��f}N�F���kd<9�Kyyiu�����^�]������~+�.u
� hk	��X�uV�V������x|<+Ц����R-F�F&�iU�hT�MB*�8BiU����Ӕ��?����*U%��%���*4�9�T��s|�����SS�]����⏅7�x�]��oj?��kSЯt��&��i7��=Ƌ��kTӵ�L���[R��'��m[ĺn��5���u�Z�����D�v�m��F���s%���6�Z�O�u�<Q�y�5o�2X��i������!�]�Mb�->��}3�Z��>����e�|s�}|A�h^����<5��铯�|c�x^���x�Bյ�y�Zꖑh�x��v�d���#^��ŷ���ݵ�����s4�73Kqqq,��<�4�O4�d�i�r�$�;3�#�gv,ĒMgøE����yU��׏�jN�"���
�B�	�V�XM��͉�7�#*n�5�V���� � yM�(�ӕ(�'R	�s���	E)MZ�8���J*(����B�(�����|�����i�#О���[E{i4�s�_Z^Y�W�Vw3C"��FYg�����?�?i� �c���U�����N����{T��|R�ҒX�c�d����บ��=3U�� �%(�3� � ��㸔[��;�:��'����ǋ�6�=���D��].�J����S����<� ;���܁^�-��AJ_�hF*̡5��+���*20�r��Ehj�N��4�3i#P�[\g�:p���F|�|�m�r߻ +>�>��!�e�-�������Z?���b���P�O����[��)>�&�����E�M���w:�a��hƗ��=JO�u�/�� �/s'��wL�}�;Yן�O�~j�Ɵ����~�ǉ|/�5]C�Z֏�jsxgú��t�i>?�O��ƭg�I�h�����/�~�|����-K�׉��=�}|��X�|5�G���ko��i�~��?���]�����ϊ��j����ڞ��];�Z冋��Z����X`�?*���V�p�(�Bug+ʝJO�P�Iքa^	ZX�V�����=��=UNk܇���E�s�"��/d��P�n�J��9��y_���l�w��� �5���_K�<�:���]c�I��VJ5�R�v�]мZt��.��w�D:7��kK[m_D���M����� �'�mX?oo��7�;�f���j�>.�ږ���ˡ�x�Q����e�e�i~8��H���q��<;���j�U����Hk�-'�|s�w×��x��Kl�7�����Z��a�x{G�<K��-z��Rͨkw^>8�߅��.uM|Gu�Q� �h�� �8~�^&��|5���|R����c>��x�ᆿ?��1a��:?�>���@��߿����"�.�����Y�&+�7��T0�qä꺕���'	���Mb�9�U(�U��8�u�9�S�u
��Uԫ�]C��q�Z�=�}�c�4�%)rF0���[� m���W��Z�з~9�|%�w������x�T���д�C�>#��폆.o4�Iu���}CK�%���o�H�%e�M.�amu?�xS��;���|�
5�4]ķow`t�x�S��;G��M�xjM��a����4ok��h�V�x�,c�䰰��/.<e�ï�;��F����?푭x�Q�i�]�>-�a�K��.����ƭi��zK�V��]n7�Ae���j�i6����<]��7�h���K�o>���D�5��M���Z]�1�P�5u2�Ú���,t�.TXﬓL�f��?�b�W�]WR
�<D������iJ��kՔ*S��{h�0�x�l��P��F�_�J�,���)ҏ�!W�{
�4�*���Fk����>zhɧ�q�9/���~�<1��=��!���'�4����Es�*����KW��qů���nu��Z���IE�U�?d��.��}��m#ºe���\w�i�Q_��Z��ZG���H.��e��/R;�I �4�2�&��򘵀�7��Yԯ'QJ5_��:���R�ԣNP���9B1���w�8���R+���)����c.W�-9)J�c&ܔc�`��+�8����`��:��~ � ��~�->6^ꚣ� �
k���!�^���;gŖsC=��u=n�Z�6�����i��n5{}+Zյ]2=?ĭ��-�Ac0��!������Uv4KO�'���{ֽ��-%����wO%���h߮����g�
�� ��b/�:Gÿ������m��滆��Z��߅<ug�y��~!�~���@�e���xwX�u	nm����������?~��~|x�&�����?�(k���M�c��&Hc��lY���WҞd��4�/P���Y��?�<K��~�eC�Uƙ�&��'�c(<��xP�ø��j֣�����U��'����,~.�(�0u'����u��7����_��)[����q����c0����W:��:��N�gG�����
kB��<DW��C>0������ >x#ÿ�'�߄>�����F���m'�4� �7����eu}�i���co.�����a��(c�S��𿆬������Vz��
Mޱk��[�F����P��.�3ȫ$�l�溫>� ���~�~�G�5����c� -`� J��ἇ	��Uù}\UlO����O�����V�㇆#Uʮ"�:\��^�u*�s͹I����8��q�gx�xzX��<^*J0�ᾱVδ���N�*T権SJ�� �RG�Q^��}9�?�O��_�G�à��,��	h�':b����2Is�/h�n��M���j6���4A>��xm��k�2���U��������� �-m���.�y�x�o�A�9w~��֙��I#T�C�Զ��R];�8[D�g���W���<�7o�SX��9�s��T/*r�H{�W�	�Q��$�хv�RZ�r�N�/J��zIJ/I�$�{4~��M�?��Ai���
���� �������5�.� ��,Լ#���/񯆮����jOy��j�������^��G��I�=�g�� d�!5O����To���G��|<M�{�S¿<i�M�px�V�!���| �E�4M'�i���^��|Z�S��A��y�x_[:d�%��{��5����� �w�|�߆v�u��l�+�{�w~$��4K|u$w�~������v���Y���$��摢�e�Ѵ�:�M
���տg���7�O��ῌ|3��ῄ�~k�~/�Ŗ�Έ4�
� I�<Qg��<}�5�:΁��o����mm}�\xo@��S�2�Zŏ�I�˪C�S���CUի�TUj����D�:�]lO��KN8:�3<L���i��(�b��*��J
��rS���t��(R��U$�FƢ����|�ZE��j�o�W�xW�,��>�mwc�i��͞�ڎ�aai��Ci���[�����$�-<�������st����1���^�jx�V�m4�{��ڗ�<G���-�y�׵9�Ma4��M%4o��M{wc��u�z����������a���<;e�������=��w�t�C�6�7חþ3�m��M,��[������׺�Z��E�V�.�,��/�x~��z���*&��_��{��m~�Kmv�[�RV}���5�bŵ������;�no'ѭo5{t��1�<U55<T0���(`T�M~�R4����R�y�Q�TXh���J1�*R��P�a�8ڄ�
?X���u�U:����7��h�:u䩹T���ԧ�?.��5�]��_𞟩2jtZMӘ�_L�����\���y�ݤv��nmg����d'ɫ�>'��מ��MOI�,��5��^�����_^ա�4�Ӥ��p��:��#T�'�A�Z�k�j�i�h���%���cQ�Z�Jucҫ8�J�&�%�}��k5%8�jP���P�1u��#N��	�rs�6�4�����rM�R���(��� `��>���F�V�X�k���~>���BI'����KT��.�z�x�QӴ�Rx�9�ҵ魤K��5�g�>���sW��Ȳ�vk����g��S�a�Wxl-9Μ*b�.
���νJq�⛒yV]���,W�pX��C	JU�(N�H�U*�)8Ҧ��U���i�M'k4�W�?~��Þ5�v�⏇�9���g�|/�=�Q��4�yi����w����[�u�W�1��t۰A���"O�'�+� ���ϟ�� ����%׉�M���� �Zݍ���_�z�Cg��{qll��W�=���E�]�:>���,z-υ�)��R�M�$�A�'�ox��7���5��gQ6𭭅��|Z�ZM�x�L��k$��4-"�c��4{+2�(m- �8���� �G�^ʗajp�d�(cxk�xWS���ECϓgt���c2�8�z�<J�CGN�6/��� �[_�>k�b*N�3+���,�ۅ�Xnj��^tmj�s�&��Q�S��
�� ��w���y�;�Wǿ�?��f��ߊ�#�_xX��m�5�0��4��/�#�(����ף���M3T�mn�i��F������� P�f�g��w�?jO�����ax�I�G���?�z޹����I>��:_�!W:��%�ɫx7^��X�~�&�.��i������� 2~1~���	��YR�	�T.�yc�v�Α��n�&~Dg��H�~��e�.*\u�O��0���I�ɰ5��Np�m��C��b8[�ja��p��/�c)�tc�էJuR���%�q�C�ap�?�<6�S�x��:�f�W*��ʘzY�]����hT��t*]�Fr��ڃ�4QEL���}�*闷� �˫MN�@�F�ߍ��Zipks�Z���ZƁm�$Ѯ����[Kյ�2tӮ����d�m=�1J�/�u������gůEi�mW��������o�4� 	x��z����׈�|uq�뺖��ξ��}��������J�;H�yu-7��f���E�G�Ea�j��eڣT�$jJo�5J1��V��Mo�_����%�4����ҼS��$�}봣���>����?|c�x�ƞ3�����"�u/ �s�
��W^;�Α7���߈�h���Ğ�/4K�k�厽�7�V�4�2^��r�}}�|G��zO���G�O�\�W�<Skz�:����Ğ!�u����s�������5������� �k����Km%���=�?���!�{�σ�������w�� �_Y����2�N����~,�^�5��I���G�|?�/ĻH�o���)�>��/��W�b�'�4;=5�}{� ��>#��_�S� �gú��������_�C��<C���|�^�H������v���}�j�ll��<W����~�5H!�ioy5֭�L&'Z.�xb�RX�8��sT�b12t�ӖNX|d'Ξ���G>d����^� �Jn�5�M�<ʝ4�9*ӗ��(ɩT��U[���������Y�.� ��i� #�֧k�����c��>-��kM/O���2��᷌l$H���;P�'�}�k�������Uק��&�N�����Z��1�j�j^)��<9$���ot�2�I��mJ����N��㵊K��X�d������;�%���i6�v��������O���('�������OR���?j�ߴ7�k-2��iڊx�ᶞ�5����#���!���`󭬾2>���x�Չ��L���x�R׮O��ҼG`���xwF�^����H�m�mf���#�I��\nH���[�gP�7r?�޾}��<U��HЛ��iZ�Hի
kZ����kBSu\mO�Ǒ��n[e�q�gJ��wS܄�Ӕ��*�+���:ъ����$䥢K����Ǌu�b�?��A�	�H���F����dWa�kkI�]?J�ץ�%��{'�uOjЦ�m2������.��M�����\�iu21���F�T�<nԀ�����C� ��p���w�E�����?qjo�i��ٰ[�֒j�e����� �7�^�������:����	�V�9|�Ǿ7pY[}��H�֍gqcs�۫�5K�ú&�g�Gz��	/|�$��	�	5;9���m,�{mW��Q`�4�P�8?m������5N8��h���Q���T�LRúXwZ��FZf�H����V�oVj��u���<<h�JT��)֡B���+*q�Z5$�
����~;����%�O�5��U�m}�<�SJ�$�ktC��.h`���7:^����giG%��oj$U��|�E}&�`8�#�8{5�J�ny�cr�tiTtk}W����*�yP�Ts�^���X5(&xY^e���,�6�J���6;�AT���Z�j�vUiJPQ�J^�JnP��&}��Z��??f-vmz�K����?x�n���焭�]��|�� ��r�� \Ғ}?Aק�e���6�%��u��KjZA��n>y�E�/�ǿ��;���o|F���Bl�1��_�d%`�s��aJд��i�=j��N�L�su`��_���
�\~�zsx���gG�t�M<�׬t��,Ir�%���)��mt9oec-�χ��u{'�u<� �I�� �o?ࠚ���N������ծ�%��]0bG�kz^�i��L�ZE*1���a�mLG�y^
YF'�ߊqt��|�M���q�䥍�xO�.6QQ�2�Q�1��+J���/�ᆧ����I���1��m���IU���"�s�R��5L6U�8� ˔�ɹCS1���F
��ɩV����/�/��ſ�.Ou�FjS��~|<���i�i�� �V6vֿ������� ��������A����v�$�wGó��̿�?���l�)��N/�^��m�x+�^K�t���>	��Q��5=[T��6�jZ��ġD�fKU��Y�O�� ~+|t�eǎ~0�@�W�o�B��Y�^�u�\[Y���i�tS9�Ҵ�^I3L����F��G-��x]�G<�3�~%���o����3���P�`�X:����k'������X��Yl3Ej��c�)R��:'��I�g����Z�?�Y6��v������4a��s��X晒�aV-�)��	Ԯ�F�QE�����;O���+K���u=N��OӴ�(d������-�,�-�V�{���c�cV�Y]� T���>��h<���*���K\���o���=�:����z��'�u/��6�h6��[�oI��2�>��x_O��o�o/�ڎ������~"�@�����⟉~%�I���n��X�&�������M�X����5������:f�m{+���)��5A�c���e��
��o�������|U� ����מ:�O��{�� �.�ZI�[=xO��M���o��$�"�$I������z� �c����p��Z��L6.�J�H��T�*�\�i���������Ք�:��U���êqU*��˕�Δ�^)Ƥc�e9$�N
3�����>�{� |C�q�o�?�%~<��W�4˽�:G�-s��ε��b������k7��O�Z��.��^]�K�2x���Pk�zn��%��u���� �~ľ��:�z���� 
��x_�/�.<���U�R7��e��[�z~�����Ŭ��^��Y�Ф���O�ѧZ�I�;/x������K�ϊ�ǁ�~6��|-�þ	��č�������;x���� ��G���{�z���=���"�α�ZZ MJ���t?��� �Q��V� �w�S���ޣf���B��>6���R�X������]J �چ��D��������io7�>xm���_�x��05#]�iQa�㉕xƝN_e���Z�h!����B�V��UrZ�sk٩h�ZJ����rn�V����t�G���?����#՟�Y�L�� ���_����\��<ou�o�s��<-���Z�<k�� k��+[�៊�ޜ���o-���uO�����e���� �����O�?�o�����=;��>$h^�W�u4>]ͤ�&������ޓ�hڄ�ׇu�6km_�����kz=垧aiu���[�֠��*��g�ԓR���)Es�-���i}�.�ձ�8�����2qi�^�i7�)$�����W�[x��4:���/�/�n�M�-t�۝;8�n��sI_��u
=����^i����h�^�[�^'���O�=&��K��]���u-z��x���.��n�`�������GM�-?��m���/��c�<W�����-�1��/�?����K�	k�&�l-5c��N�������<W�kzT�_�?�K�i� �����&��h@�׍l�.|[��E�������𭽦�co'�]ľ�=������sMy}��v��K����N���*-����7꺁�`�а��e�o����BtjR�U8<:�l-z�'*/����pQ��*P���,$��bj�J�����5�:P�	��'?m(ӯJ0��>4e,S�*��V�yT�
qti�h����%�� o=�栚7��t�o�]K@Ik��;���pu{˻�+MPK=�����R�u%���^�U�������iOe���et���\FP�R�O�{iЉ-�ai ���Xd�6V?SxcP�f�_�4_i��xG����>%ֵ�_YX�k�kN��'��9{��ϩYi���%���o���~K��oUُA��Y�����+�$}g��捭]�zXh7v:]杣h�l`��u�o � ��=;H�Mvv-s�[%��� ��3��t�������ԩV0�i�i���b�)IS����8y��Ч��T�ߋ��)c#N�O�U��]8BR��k�R�&�-'�(�(SN�i֫SA�V�ʊ��S�>
�D�y�K�;_�F��F�6����4�{�;���6٘��[����S}CP֞{<P5��q�&��F;_�;]8�[�kP���T:|����˧��5�͌K-���uqb��o~��(Џ���`jE�R�G��U(Uq��N�ԣW'�Z�Z�i��Ҿ�!���-�BVQ�;ە­4�e$�9��q���N?ß�J�AE{f��N����?�|	���<(��ڗ�jW���q]��]���h��s$��q�,kc;Ϋ�m��M���Դ�K�+�x�U�<?�x�I���E�啟�γl�^-�[�r����{k�k�r����5���wS9�S���:�qMS�V�r�I':��)R��*��RjI�d�r�T�N��k��.����U&��AZ�NJ�+�����j���o�h�m���ݳ������{y9�7�O*��$��QG$���X��r���뿆� ����4�ľO�^��3⯇� ����>��K��5��5��k�J��J��K6�0��i:=�kZ�x���oS� �[��km���������?��B����(k=:�=W��X�Pռ&�5����Z�z���/A��m?S��4<w�oi�o��2�ľ4�l>$���/�u?[���>�&�.�<W�x{U�};��wf�l^��ό<=拠��0��񮑣|�/=��8a�T��b%����2t��5R�X�u�
^����y��kS�����G�ǥG.���"k��%��4d���r�tiNRQ�~ڬT#	¤0������>4�Gi����|B񟋟Vҵ�'��M��+ּ�x���N���x����V�0�d�����-<K�+w��o��k��w��x��Y�����^&�>k>�~����
�^��S����^�� �4&��~��¾��>��Y\��mBi>�&��=�{���ܾ� ���χ�>x@_��L�Ԛ=v�QռB�#��/���˘���=]��(|6���$��)��*�6������� _�w�3Ķ�:��K�|�s����(Ig�x���5-Q�7�"::'�|G��^&6�"񕇊���gM[�i:���\{�k��F9�p�+(T���USn�����f�1��Ӥ����YJ�Ll��\d��ZOg)*TS��]X[����M{&�R�� uUB�#F)rѕ��G��� ����ߎ�_�����c����kQ�����뉼%�?�z���'��(h�	�`�?�<o��Caik*�_t��!ay�ٴ�������|���~�u�� ��g����K��3�[�m/C�t[8�4�6�Y�6ְ��I�`�O,�I$��W��<2���9�R�����9I�)JOV�&���ݒVK��T��gQ�g{E$��$��$�ItZ�ݲ�(��3��1��W�A�3��ύ~��Ŀ�>Ѯ��3�z|Z���i���rG$O�[k�K	�u)m�-6�8o��[�!�?�� ��������ѫ'�_�&�ӿ�j��|K�?����w��p�=��%X��9ll�#|=�l/��
Y�ڶ��I��[Q�ѯ�M{���W&+�������E?gQ��g��(���A�^{J�I5Ӈ�V�?��J�8'h�)FOF�������ox���L�:��I�c��C�n�m�i�N�w����I��#Z��m��:&�4W��ڭ�E�ĺ-B�R�,�㿴�Y�xkNӼ!�F5�A��jR�'�v�wq�ɨEi���.�g��������'��W֮ mgO�N� \_���{� �� ��jI�?�?� ���m9�����gSo���gW�O_iV��:78��o��Z���y]��� �A� k��3����]��s�+|^�3�Mx^-fWþ��3�ī+EMM�Dk�>?|=�<6�\���~*���w7��p,���8솽L]D}�4��nHӣZ����2��J�.�U�y:ʝzp���C����c��E��jB1R�9եMQr�/g�J�iʔU':�ܳ��J������� ���8�/<0���b�\�,�uG��}�Xd����w�G��K[��:������Εp� �w#Yг�a�<2"ԣ�}��j��"�E��g�_x�J�Ι}�Yh~�iy�Y��n�m�k�?K�����O�PY����/��H�*����u�%~����м:��zǈ��;Ծ.�>'���xfD��S��Э�Hյ{�
��V�;kl��c�����O|&��u_[k_�i��Y�{�Y��ϮxW��K���z�6�h�ց��.��P/�'�&��8��'�-+OFԭ�������⠩�}�9ҧ^�.���?������x��Z�*�Tڎ�<4��[
���hb�^���^�p��ӡ*��tqF2�_a
��
�u&��9V�T��ug����+�k������Owi����3�xoUԓ��x�]��֯5�-��5֏��Z̚DRZYZ��1������ƚ.�y������j^����ZK?�{«�L�q�O����ؓÞ(��<}'�|cs�:&�sj��^�>�ms�����c��j��?㟌�%��=��tz'��]�O��z}k��M���-���5�Y/"�&i��M/�����̆��φ��G�*����D�+���h�/
_���/�%�g�W�!�w�d�4�[�׾4x���.�pWY�uHl�yK^�[��5���DҬ>[<UZ��T�*r�:<�ib�
�V���¬�T�(��K�.jT�bg
���F�!?�8T��jэOrtZ�R�B1�
��M�JM�oAr�c:|(�/�-�5�鷩�_?�m~�<:e�^�i���}Վ�t-R�/��k[���zm����tT�{�i�k���j:����4�x+�zX�.�g�]+mźǆ�/��<#�w�<]�#Z��-4kK	�TP�Y[j�����a�x��_�g��	�Y������?��.��[��� �>
�㟍5}:K��=W����=�L.��L����,�ipϩZ5�Ŧ�>�c�x~��H_��	�uy�O���n�m�GU�[o�o��.~ |^Ԭ�6��M��w������[�� X�K������M��G����b12�)b%	r��
�a�*�N��O	[�­z�98IAV��
r^.#1��R��9�M^��N�R�_vr�\���n�:��\��Ҕ��L����l�ƿ��%��5�EWğ>��(�|G�����~/��>6�KO'�u���ZеKc�]��Z.��])�/�:������k�;1w��x��W��9�g�� x����?�/�;E��;�h�|B-+D�4�{];M���m����(Ԗm���먯��a(ac�J	IƜg?�?eJ�����S��ѽ�nf���֩Y�r�NN1�iJm/���v���
(��L���
            [firm_left_thumb_ftype] => image/png
            [firm_right_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��I�z 	8���9$c�'����Ń�3'g������x��������>�)< z~c'+�sK�G\t=?�篧L�����k�O�M��?�Gڢ�`��l�S�?�y��Z��ר'/l}G9�p~����*:��'�H�!Q����X���������E��h}�����t?��M��C�������4c9�q� =�>�2x���� �C�a��~�Lv�Gğ��>�I��o�|-�[�~�Y�v~#�t�
�Z�$i���V�jWE�G��i�P�W��P_������F��o�=�z���u��0�ugsZ� �?������c;��H���5�a6Z&���̾��lo?�G�����2��<K�㗊��K��v�i��3,�x/F��o�|��,��^��1�ion~�u"I�j�ڵ�����^x/���Nc_,� ��ѧ��
�Uq������򭇍JT��!�P��h�U*�_c���<�8��֖�ܪ�&���ٍ�֭�k� �����9v6�1R ��s���)~��4��p� ��{�װ��C��-��xK�0��|e,�Y�<;�+�g�o�i]�u����C֯egy��^�V�12���t�G��O���+(e`T��  ��z��2 ���q�g|�V�s�;sU��F_T̰|�C����kQ���z�Ԫ-#)u�qT�t�V���BV�2_��KTG���yG����s��h�T_���y`u����=��g56 �s�����3܎1�Gy0�9��I9>��}|q�C��A's��l���}1�ޏ�ş�kߟ&a��.��q�ҥ��<�<d�u���ǜ��N��I��|�&� x�s��=9�� ���5*u��I�6�A�r��K���_��?��N0�?.?ڐt����Ӡ���@���� ��cn��bz� �ן`3�8 p1��x�<s����� q�9s�t<����gv�zg�c�L~]{��^W��89�O_���R�8<v�I�`_q����7_��~�c����n����A����4 �㌨�7q��O@?:������~��?�]���F���ڴvm�D���Ir�� b�C��2�Ե�n�3��h��Q���M�����>5|h�m�<�-��O��(����h��^!����������>� U���M�4�T��SԮ���"�y�C�l��T�)'ď�(��)�]��C�|=���gጷ[��ti$���6�mo|q�h�}f��i�����Mg���� �x[��8殪�8k-�NY�a�*�I�-�I�Yc1���(��K��R���k�َ>*ZZU�Ji��M]{�췛\��5㟷_�������|h��z֖jn4������o�8�jܴ�^�@���l%߈uǊ;�wU2\ȶ��i�_��q�<g=����Rm�wu?N�� /N����#�����x�����tb�F�����G����H�4Y���m�-��')��/#���J�]kR���T�b��ˈ���<,�5|\!��8/���n[��W�ݔh`�Jp���MT�b*N�|��թRU&��J�F?%�R|ө9���k9Y��$��VL�M��܃��#�c\���� �?�M��_�����b�6^���{��K]7᷏�+�0�����Kq"���4=Yγ�޳���@�`��O��گ�?���j���X�]�&��Xt���ԭ���������W�ѵ |���n��SP�deX2�B�*J�pr����H ����~�_xN�*�ib�8����Fu�U�S�a�%�^�����gB�i֧Rt1��{8�/��)^�I��_}�4��%��������Ќ��=��<w\�9*q��'�Q�nf����!���~#G�_�����YO�pCk�|����	�� U�O��5+�|m*�xo�r�tq� f�3����O� X�$d$�r3���1�g��r�g|�b2<�%Zw����RxL�	)5K��$����N�(US�Z1�	#�p��X�Q�I�=%�S��p���דVi�����랹9�_��4��r���r=G#�^�x�HGL��a�H�=#������Oa���:�s_&t�'�Os�8�Hǯl�q�!������cv���<����z�~�?�#֘�:���?�n:���zz���� I8�#��>^9=��� ק 0;�ON�A�G���l��r�[���q�c�/a�#C���#ۧA�.��?��Ӧ}=Nk���+�� �� 񿍵�+����x��Z��:~��h�e��_j���$���D�H�� m
�@;�7ZA=���[�[E$��"�bC$��,���q�I$�ʈ�Y����p�గ�׊5ُ�v��� �/�5�_x�L�X�㇊t��Er�FU��q�]Fe���^#�x��e��BH?A������\��W�R��0����Pr�����h���9eO��uf�9rУ^�><n2�
��=d�ì��Eo)tZn�:� �b��'� ��|P����_�ʿu���A|; �O�����4���W���d�m�m/�"z���?�sm���?89�� ����:2@���>��+����p�w�A�@xW���ߌ>���h�ω�}�/x>-;W��3¯�{�+m[��q��Vp�y��>��[���\�/�A��p�px
Q�rL��S�:����<��ԍ(:��v*i�\��\Ey�S�����ζ2�4�5Z�KV�W�-]��7�J���ԏ�!��~������� ���eυz�E4�B���7���[��#j���������h��Yxb�k�o�7����� ��|J���� f�>�E�C����Q�_�������4���T�|?�iz��k�h��њwk��nm.�l�#���o�C�T� �4�|3�o����� xC�����;�gÅ����6�V�!����S%�t�����^��-��9���?��?
?mڏ��b���]�޹�6K�x��|��}O]�u�����zCx8x����חSE��){af�f�,iyqݬ6� ���O�<S���r<�>���S���S�b)��d����U)�?��F�\Ƶ9:�£	<%������n����S�E�'�E>ž��D�j\H�$��	u����-X�����ʢ�����W�ƣ�G���x��<g��>�n��[@Ss{���4z<:��~!�?���x�V�e{�:�t�j���d������?�y�����?��tSg�il���-�Sx��S�,ZW��-{"�s���w6�E����s��P�yl��� �&�����5�z����1x����K7�>#k��~Xi�[[+]&�C�l�G�ȴ��� I/�y}�O����wQi�k� �� �\� �D~��8����/x��K�[�/�o��'�|	�y�Eă�4�R��[Z����<Qj6�Aqm-���麅��_G~<����yOd��#(�aM���c*��q�,s<)QpnT�����q�%*�x�Ќ+~���]��_���9>_����VX��j�?i?���,��ZyC��G-��qV��[���[i����[{�y#���	��Ya�	bd�9��H����Ȫ������ ��൐|i����[��!��e�������{(����FfH��=�
��N�tcoC6������ �<��-����j�τ�G{�Mf�I���W����n���|7�}��M��}J٢����T�c�A{mg}ͤm��Սխ����W�s�ygyi<��vwvҬ��6�02Ooso<q��O�L�$L��G��p.C�Og��T�?�dٽ�x�z�ԩ�(���\5h�,NR�<M+kN�(֥�>[[�vj)��3�j�i-$�啛��G$� �`���3�������.��� <g��GrI���� @� ��C�GYx{�I���A���2�=7��mJT���6�anLZ�3��?��u��2ʾZx��3u+���-� �����s߃�'>��8������#�pNw�ȳ�?���|�kB��c��rTq�:�/kB���J�jP�
u�T���bib�F�'x�zJ2�n2]��ut�hB����מ��wS# �Nw?������=>�q��pI�zq�瞃�c)��H���q����6��\~����q�q�>�9��<Ҍ�� t����>�A�4����'�a����}�:����<t��O�9��\cP3�c����?��ߴ���k��-WZ��-�]CP�w�����=��%�c�"$��>կ��Z4�gVB�F��:��߿Nz�����ؾ|z����K���/~3�,�e����w�-���O���u�6ڦ���Q,�B2K�g�wr�{Y�lm�5]���;��?��_�P��u�|2�G����乺��?��x^��>i�4^#����麯�u��x��͠����m'T� I/쟣w��E���y���Y�+0����sZԲ��][	���8|^*T�Ԗ���^�9*�7G����^�ZuiBU��R�4���Rr�1��2���V�����Vz��Npx�	'>�qB���b8�{��u�?�~��#w� ��U� ��~�7~�n(� �7�P?��~*���}x�?�7�����׃���H2��l<?�b������[�����}�����n��p=����+��߿�'����X���F6�iM#I�^���f�௄�R�o��̫qg}����ٖ)#��F��"5�A� �� ����0�������|I���?éǞ"��>��:��yl��-��oT���V�]/u���>�5	%[�J�_��(�(�#�4X�5T�DU�""�*( �����?���x+��,&;�T���7.���a�JR�e��a�T�'*��/��T�pm�Ղ��\�P��U����F���K��,�kOv.�g����+� ����~��6��'��]���L�m�X�=��}��_���<�M�I��lGo�u׬3WzE�6[ۻ��-߿�������?�/���_�����~+h�k~����k�P]�=�o���"�Û{@Ԣ�ִ-F5�5kK�����~0�����(x��>��<k�S�~���xg�/���$�����4�z�� Z^�5판=݅մS��������H� _�g��nië �����:Tp������3��T�������S���y�J�V�I�(sf�d�_�a�Jt�6�t�7N����o�m�'�|�D�� !F2y$�q��� O9�ӧ`���c�>�=���L����T� ���S����� ��v��#�j_�sw�����\� �߁���]�}�k�?�׃���H2��l<���� e�� �j���?��ko�/x�Ğ���U����?�����xZ�Ny���ZN�m�h�6M-�:����l���@�<�N�5�Ώ�\jp���q�YO�[���{-�Ow$���gA׀2z
�/?��?�@�zƏ����+�|;�W�]oN�_��]kZ��S�i�h3��<9��.��M*�}F�M����u��Ӯ��5�d���4O�^�'�|[�U�U�|�D~0��L���5�W�4�P�S�h�����V�HY��J����mm��)�?����a�qVm��8{�Ϳ��.cW3�0�'�������K��h��N�HNt#[N�'����d�j�zUeZ2��N���{�m˕ꮤ쬝�{Y#� ��ߎ��9���c@��es��n�Î��O��� � �ǯ9��`�q��䏚A��zw�=z�f=����qC��+g���l�8�<҂v�w8�:w=z��^[ >\�� g����>����q�����q��d@��O�*w�y����l���F���W����?ſ����%�|I�x�A�yg�况m$76�7��B���ME��B�e�O17�O���@��!w�?�K�x�g�a]>�~�N����=k)��շ����>�S�-$Rڛ�����M�xm�=si��=�g��rz�󎧩��_�)W���c����|k���V���G�E�xO���
};�E��������9t���k�	<�s������性�f|���
�&��e��,χs�T�ܟ)��C/����.c��ףW��=��kҫ/OJ�qX�Q���aV)Zq�}�{sFJ\�/�4� J�!��%n����E�-��J����� ��?�������?�K|[� �@~X�۷�� ����V�e.:� �e�\�����(� �]o��+_����2����G�q��~���}� ����u�y�?��� #��y���� �%� ˏ�� ��� �J�1���_�e�-�u�G�y����� �+�x���|[�O����k��� �]o��+_���9|W������ �0�.������O�� �������a�ڏ���� G3� î���� '������� �K� ���D1� �����G��ű����#�|�� �+�� %��8�E�-�NO�R�����w?�_�������� #����޸���� �]o��+_�����_���Gz�Z?���<�� �//������[�� ���/�\Dg�� �V� �u�Q��~|[���J�^��� ���J��<T:�� 
[���� ̠1������������k�R���+��Gy�w������� Ek�R�@� ���n��zq�� U�ѿ��g� �\��S�O�����O�  �� .?`�k�8W�v��������}�W�A�__Ӿ|<���x���'��o\C�������ZN��$����o�V�m����ֶ��v�[����ş���˟�߃~�:��>#]�ߍ~3|Dծd��>"�c��?|_�j�7_o�&��J�t+MM��F��� �� ��Q���jO�#���w��  h�|)�~�~+�ŷ��p�t�'���V��$�ɢGi���ꚢ�?ؤ�m�������u��@�߹�_�x�_�2��8S��ML�)���g�z����s�T�x7^8l,~��a�UӧF�:R��kʢ�V�j�(�9b1�P��:T��i�Y�IsI�T���n�V��&H�02;����s�M�;{`4���l:�|��i��C�����:}I�L���ώ��pG��'�3_��U�� 8��F����9�� ��:R��HǧR��^�F(s����� ���z~>����7�q�1��^����9��G94^��x#���ӮG4��0ߧ�=��$�FM `rq��$��}:sHa�T�� �׷��?  �}���<�� ��c"���=x!y��یc��)���z� ���@�\�'�q���8z�s�3���?�.�}��C�_�(��:O�;Z|U��|����o��ś��5ּ-��C]�m<��{�r�ZC閺�6:=�����lmd"����[�
i�Jx��_�QxS��пlO��?`�|}���_��t/���7��8�f��G�-~��F�}�
�ZZ�wR�%׃�|=g�A��Z�ɩ��?�)��-�?�������0xO�����������x��W��+�c��7�,��6�ö�#�ɚ���חk�{{Y�L@�%�����?�Q���-�e~�� �w�G�_��������i_~x@��ag����v��MkS�Ɲy~Z���Y�`�&���X�M��_�-8�]���y=-u��}~	��� &���ς�M_|H���#�����_�C�������U�+x�������	���|Y�k_j�/ï
�#�:��</����ŭ�]>��ݯ�%o�o���?��ψ_~;|��|A� 	g��7�?�4�Ӽ?�O�7��P����s��J�Na�w���-m��R���b|/�� �8?i��>������� �W�>&|���7�>�@�k�3�z��O����tI��l>(�� ����]�W�B�Q���K���B��oV��+���� ���[��1��_#����� �O�w����7�z�� 	M�������ZE�ޝ�?
�֚=�6lW72����{k Zr��];��� �5��l�1�Ooc���0�w��y#��G#�'�Nx����q��W��Ԍg=��2rA �C���sߧ�Ўq�����~�`�����Y��4-}6�Wִ�*�Y��O���u[)�K�^4��O��h���Y%���I;���.ls�=Ͽ'�'��@	ӌ7S�z���z��=�����$w��}>ǡ��7��ze��ڍ孅��f[�������5��f���(��4��2#��JԴ�cM��t��=SK� [�GO�������m��-�����x�d�hdx�FWG!��]W���%�����n.,�����/,���3B�ͫM�+qa$&X'�H���
7���8�K�'� �����>"���^7���>:��k��E��c�_�R�w�lO]jwp����ï���j�!�:�?���ƙ�n֫��w���$�	��3$ysG���)T�r>>WP�`f�P�o�E�<�7��� ��<9���ë|A׼}�߈~5�_� �u��ީ⏈7����u[�cH�Ğ+��o\6�h,<E}.��>�bx¿�W��v?#?k�x��	��c�_����{m�����}�/Yx�ƾ*����'������X|}�%����)�SV��]{V�5�\���j��J�M[�sO�>|X�E�Q���d_��M�����(x��?�|u���ޙy�/��� g|Q����z��5��~%�����_�/�^$��m����4=��h�~�x?�&�Ꮗ_>�:'�~,x⟃?�[|A������d�W��Ek��X�>��g���o^���Dֱ.��Y����jZ����M�j���s����~��Ԣ�}��o뚦�e�W��?��:�������_�1���k�ޓ�[˛�-"��Y5_T��Sw�`�O�:/���G����O�]���_<m�N���&�?�� ��n��x�Ǿ	�%�ƿ����~���n�U�H|5�-;���_����Ŀ�~!��A�!ԧ�_�)�o�?�MMS��z汯ꟶ���o<%�|C�~i^:���ŏ?��Qwc;i��� 	�|=�}�^��K6��-�@y���������k���kr&��z��:O���P�7�._⭧�]sV���k!����H���o��*�5߉�� k����=N�������٫�wǯ��o��T���/��G����+�㈴��=f��B�����蚞��� g�_鍧k:�f��A_��~F�w��?���Q�|F��?g��~�_ > �V��+���>���U�Bi����WKӎ��ٮ������M�Y��-ig��K?%�?������|� ��|��s�/x�	� m��� ��S�J�࿈/������|W0j?�����t�-c�Ɵ�?j����M=/^�T���ӭ�Y� S�%~���W���t���Ox�Ě��!��F��r��������~�j�Q�</��x~�X���=}�WYֵ������j�Υz��K?��X�3�e�1�V{��ï�_>
���/�|O������o��`�Ԟ����ƣ���5Mv�M�5?�~&"=oB��χ��/M�Xd
M.��t���G�?������C�jV�u�������F�Kxo/�������1�&��~��L�b��aW��� ���� ��~>~�?�O�|K�+A��t�{��ǿhZ��i����O�>*|�I�8�[��K��k��+�>>��]B��m2� �w�M�#��~(�ğ�e��жZo��?e�|<� �c�7��Ǐ����<W��Q�7��?jZ�^����w��똾&j֒]=����Ʋ�V�%}��/�O�5�ž4��?k�>
�߳� �|?/��G�u_��&{����!�hP�777��� �E�z�r�jhb�T��y%���~X�!������)���#��-�x��,���o��g�|U�Z�-�o�g?���g��om����YZx����������ޘ��_���m_��3���O�����;�3�~"��g���|P���/��,�1��_� |����3���O��������xz�W� �oY��������V�����G�	��*j�����k�Wÿ��]���3�|{�KC���E���O�����֣�5�v�K��-SW��ץԴm'R�S���)+���S�b�Y�-�>� ��q�/|�'�7Ş"���o����*Gk���o5��&���9,� �^�<>���[��^���$O���� ����;�����_�	}�l��:_�>-��Ɵ����g���	�4� �vg�W�=C_�v��x����ǋu��1�W0��𝆌�ǧ]��������~:k~
��|'���Z'��߶��,�c�~#�)�W�I�����M����G�����C��k�,���|9�kڧ���R��G����mAaҴ?�l� `���N�a�<�����m�O�[�^����9>)x��������'��>���j�$�t'U���7H�-毧�ื�_,����Lo�?W�qa��N�^�i��|��=���O�����^;�U���|%��� ���Ï|@}w[�񿂼+��O������]]�i�Yu��� ���W�~>��_�x��]����>�	�wß�O�|{���oi�5�CĚ��φ�����?�.�=�h:������_x������|ڄw��_���N}����UT�{�^���+_� 0 �G9��?�����mO��׈�5�H�ox�����O��t-K�/�Oj2�^/��]SK�D��
���3�x�_Ӿ ���Uׯ�]F�Y�ֵq}�w�o��
�	��� ���6����>�cL�g�,��{X�>�e�����u�~�Pկ��iV�Iyy3Eo6�Q v�+������zl��ru9V�01���y���O?�1�^:�� ������F\��s��g��˜�e��>Z�� 7�?�<P"l��<���ߧ^:
7����x�y>߉�P��� �����>���׭&�����J>��3�G��?��� �?+�L��3�[� �I���i�G>��?�1Ҡ���j����k�	$���R$�����`��~�z�5����������g�m�=�>%h_�<}��P^j?C�a�?�W���V���M���ŜV����^�t�cMӤ���g�x�㟁� h/�{�?<1��.��ۮ��$��V�~9�t[!�Y|I�.��B�յ;������Ӵht�Me�/^�Ѭl��/�-4�K�E�P����`��xc�{��-�E��i�FDT��w�g�i����� �����z���L���~"��w��^X\��:LZ���)w�K�?�� �Yj^>�D����_�L�b$��kG�k��_�o�� j�7�f��_~���X��/�!�����5�[P� ��ÚoŽk�w�l> �9��� ��'x�T�Q:G��ˡ�X� I��1��'��1k�u!�͝0F���/(ÿ�&X�5���no�5;�M>}J�&KBm>�[�$� \%�ۆ��&�2��%
����yot��i�g��`>8�� ���?�?i�-͗���+��Y��2'����� ���}up�r{7�����y�n�����6�-�^��:��?�{�n��K��������� m��ڧ�� ���>8����ْ��~���x~�ⶑ�O�(��k{�> �	<`�Z����Y���ÿ�#hZl�`}?Lc3�>�h�c�4��%�7|��4�� X��tK�l���Z�;m@�֟n���3ZCw�ϊٙ��D�A(J��{h����Z_����2xW���W� ;�Ѿ3�O���m�O��?~�������x���/�{[�im��w�Ɵ��x���\���˪\hj��ԓ�2ˣ���N}wT���������u�~��t��:��-t�7�	���㞪|5��}��+o�� �|2���{��>�aae�\i�����?�_���������W��ƿ
��%1Z�yku�O�<;��u���y�jz�Z\�������cgyc�����k��K/�WJ��tȮ�o$� Z[�J��G��u]J���5mR��R��ﮞK��]�7{|�vK�� �;l���=3�g�q����<�֔�=y���}��{��d���t�����OzM���p� �מ��ݳ߹�h����Y�^l�Cӱ=�@ �����S#8_l��92?N=�?�9�'?��y���zs������VU
�q���^�X�3����PS�G��mQ@�=�B��( ��( ��( ��( ��( ��( ��(��
            [firm_right_thumb_ftype] => image/png
            [firm_other_info] => 
            [firm_bank_details] => INDIAN BANK
            [firm_bank_acc_no] => 6055720590
            [firm_bank_ifsc_code] => IDIB000B119
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 4
            [firm_own_id] => 101972
            [firm_name] => CLD
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 293
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-06-03 18:03:20
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"SJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"SHIVAM JEWELLERS","firm_desc":"Every piece of jewellery tells a story","firm_address":"B.T.C Road,Howly","firm_city":"Howly","firm_phone_details":"9101618753","firm_email":"shivamkar54@gmail.com","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"JOY MAA KALI","firm_form_footer":"","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"18BXVPK3167R1ZA","firm_since":"2022-05-03 17:25:53","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"image\/png","firm_right_thumb":null,"firm_right_thumb_ftype":"image\/png","firm_other_info":null,"firm_bank_details":"INDIAN BANK","firm_bank_acc_no":"6055720590","firm_bank_ifsc_code":"IDIB000B119","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"4","firm_own_id":"101972","firm_name":"CLD","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"293","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-06-03 18:03:20","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => SJ
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => SHIVAM JEWELLERS
            [firm_desc] => Every piece of jewellery tells a story
            [firm_address] => B.T.C Road,Howly
            [firm_city] => Howly
            [firm_phone_details] => 9101618753
            [firm_email] => shivamkar54@gmail.com
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => JOY MAA KALI
            [firm_form_footer] => 
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 18BXVPK3167R1ZA
            [firm_since] => 2022-05-03 17:25:53
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��(�� (�1����g������>4x�@�u���ky����Wf����;M?M���f�ּA��3�i�֋i�x�ĺ�톇�階�ge?�K� N� ��?jڃO�B���|Y�6~��_��x��&�y�>2|>ң��Q�F�Zj���'Û}V���X��姉~ ���\�(�Ӵ=S�Z�/��F.�H�S|��䔪M�8B+V�Q�������Z��u�F�f�"�Z��H�����F��KK���s��� ��~ÿ�䗾���C�w�;�t�����;���0�;���m5/	�/&+�w�����oj��L��ҼC��v��~�?�v��C�xm���^	����\�K�~�:j�*Y�V�6z�������	x2��=��#\�s�|1��ʒ� B�9�mKP�H�M4ؿ��h�u/���<_?�_i��x��Z�?x�Ǿ,����t�:��x��ǈ��|K��R� Smk������o��S��_ƾ�S��_	t�_����4�i���߅tK��7~,���?Z�t��yiy���Rk-n�W��ѵ��E����as���
|�;;�CF)���iBn��n.
�$+b�.D�U�()aXrJj���Mϲ��o��*K�s]7��Z�'j����m;{�����
E�W|Rմ�~��ϊ�;�(^x��^	���?�~׼!w�1�D�_��|��T��W�𕮓3x�לּ3'��|��[� C���⯎�+�>Y�0���o�F�g��[��{u��j�ς�E��s�~3�|W�x�� �e�����i���O�ͪ��l2��:��<!�f�����]o➙��_>Ǩkw�o�w�K�r3��Ҽ��]+F��<}σ�h]K����/��-�����K�oH��w����/�����s���ŷ�/�|�|U��?j����"�?_񦅦�gQ��Aicm�,�է�ﭵ�u�$^x5�1��N��8C<4��jR�Yʶ�z�T*��,Zt���u��j5��N��J0�M��r��F�5�PJ��I�.�ա)rՍ�VQO�*}_��=|@��i?�5x��s�.�⯂6�<k�|4�u������~"���[k�a� x~Ut��z����\�X��f��E� ���P�fO�B��� �y�FxkHִ�x�¿~+�C����i_�:&��A��'ㅟ��� ��S�za�t���@�|As���G%�����'���|���'��9~
�"�6��� [���&�|'>?�渎ٯt�/��P�Ή{��&��A�^����=;N�𖩪k����ψ�A�^�����:ߌu���{������^�m�<k|4/��V��i�=��s�~�'���>���J�uX�����\Bx�=IѡF�<m*8��ʄhN�/aJ�bg�z����Q�,$�=�N5�
��78�s��Jt��'R3�<�_���R\�a(T�)�5����� ��>8je��N�	��/�:���k����
�u��Z�z�[���'��8��]r�Ŭt���U��������i��ھ�n� �/�Q� [��?o�x���T��|�qs���^�w���|J-����o��ݖ�.]*6X�C7��O��[P�4Oˣk��z]��M|>�4�~E�������+�c�Q���k6���m����3���k�j>1�;M{W��&��x�F�laѴmR��}�x��O|q����]�[�Z�x^�� �6���kz��4jZ5͆�w��ڲ��x��L��V���g�^j:��Ph��:�O���a�U�({w���8jJ�U4�d��~��	:j���l%F��U�7ȹ9a9{J�jI5`�R��ܒ��-�/����� �%W����������
>��į�w�l�<=�FN��_>h�Yݿ���6��o~:�?�>�
��;MM��}�[���~&�B-C����|Q�o�>!|9�N��_��K��|5��6����i� �WV7֯$R�exf�����)�nc��bO�����9a��r�����R�9S�G	��AT�gm�x�U�*��IU���|�i�4�⤯�Vm_u��QE�`�?~7|.������Ɵi�_���מ&��u����6� ��FSs}s$~�����RԮ�l-#���$oV��p� ��� �:���O�~ǟti�����v�律���J�,z}��O��B�~$�z%��W��'�m�:���-���<G��O�{�[x���prc�K��Zќ���u)�u%��]Z���{��)4���=��]z���-�y��J+�䌚����M���W���
��G�
{�8�.���O��^#�͖��W�?�?xu<4�zn���k��A����E�Em��o�\_[� �-���E����\v�#���/�>3�s�{����>�~2�1e�/xs��w�<m?�?]x^��ֶZ���u۟�[��Ɠ����mF�U��aa�Y�y�,C��>���;���C�;��tx���#P���j���e�ivg�+w�G��;H����;i:��yb���ZE�����G�t��>,����/�z���_F��|e�/i� u�_|@�6���$��5�0K���7����ZK��O�~���.��g�ƭW��)ԧϊ�ҫ�r�R��s�\2�R����q���Ɵ�>���p�<Ut�Ӫj��c/�S�)%Nj6��Z�t�N��l�������R�7#��o��G�'���^(�u�퟉�^�W����_�ĭ/���x��7�#����]WKյ_x?���'�/���mu�2[�h�)�#��78.��{�D���<_��þ����M��Û�kzߋ~�������l�MKL�|'�[kY��t���z�J�|B� �
隦�t[ϓ�g����w��U�[[�4�ZL�u{[x<y�{]I�4h�¡�l�]Q�Z��M��m����e���� &;���H������Y�ؖffbK3K1$�I'&���KR�3�^"��w��V�#���T�4��ʕ('[��)�U�N���_j4h���you��{I�T�Niپ^JI�ф��}[�~�^ү4��o�_�Z����Dx�W�7��e��7>0��m��4�=n��3ǫ۝f�iwZu���Ca�[[�_���ꚦ����}_[�L�W���/��Ե;}�t��Q��7����r&��������U��1�6W�W��+��jxZU�M9b��M�%7y�]Y{ӌg-}�F2z�[����jJwJ��i4�S�9V�E����w��'���ݠ����zf���N}j��+����{�]�֭v�^��5;�&>�Vk�|���|�۫��ЖcC��~ �_��ci��xoN��𧌴�/ln;]{S��m�V��-|ͣZ�6�p}Vqo�*��>�M�o�?u�O�-4�S�zn�u�ѯ5k"�T�������J�S�����#y��[�v6�4�̰�8��Oľ׵x�B��7�*Q��j��Y^�;(�6hfU/�2Mmqx.`x緒XdGg<�.�� �(�r����^R�c(��t9I�3�W3v���䛎'�����Jo�$�M�T�J�1n�W�Jߡ�G���x*�����'ԥ����|-���Ǣ���4O
��>��^��֑�5�m/B�E���H������D����F���xC�w��
|4Ҽ7�7V����]C���tO�>8��a��?R���u�i:O��?=_k���,�"k�N�iw{���v�~FW��5i�W��|X��v��d��oOi��?Y�x�pȚ�Q]j:���uc{qW>&������rk:2'�/�sî����JNXz���B�~��]�r��t�&*�P���,z���lO֪B�}<>b��K�-XƓ朽�"��,����缕ܰ�����(���5�G�֗co����
��a��xKO���Ś���)�xj���K�jzN��隞�sa�?|8�H֭5�M3X�_V��9�� ��"����G�3���>8]�_����R��χ�<?c~��{v�>'����~����R�?^궖�V���:���ؙ#�ǌ��8�|3}�����*�4x�&�����0MWĚΣ�x����:v����u�1�Ϧꚯ�ll�	�-u��o������� �����x�����S�c�|=񶱩��7��}���[��5�|Oa�����/xz��ű\��^E�xwV�u��M�-GR��] Y��Q���ԥ
q�Ӥ��a�B
�\.Jxʘ���_���9Ɗ�T�B�z��T�z��rƤ���j���I�(T�Zj�iS��e%J��\�V�HS��R� c��� <�[������:'���M�?�<[���5=��m杪i����Omso*:�C�ۢ�#����S��� ����&��/��↟��_ �+k�C�:�ڶ�g5��o�gO���χ�^m2�]�O�������<UyԾ#Ios�hV2|E�~������\q�Z8�IT�	T��	ʍIEJT���5+ߕ�d��ex���Qt*Λ|ь���e�)�(�F-��־ͫ7��� ����� `_�'� ��E������T������J���~!���������h�+>|4ӼM�i���͗����Ko+^$o�P����|S��J|)�)<����k�X�:���w��f��|�$ѥ��oo���O����#�k��%����h����������=�u� ��7��kھ��|.���i���6k��㯍�N����Gc}�j�w��~��|%��q=�����w�U��5��;� 9>�����uU�W��f}N�F���kd<9�Kyyiu�����^�]������~+�.u
� hk	��X�uV�V������x|<+Ц����R-F�F&�iU�hT�MB*�8BiU����Ӕ��?����*U%��%���*4�9�T��s|�����SS�]����⏅7�x�]��oj?��kSЯt��&��i7��=Ƌ��kTӵ�L���[R��'��m[ĺn��5���u�Z�����D�v�m��F���s%���6�Z�O�u�<Q�y�5o�2X��i������!�]�Mb�->��}3�Z��>����e�|s�}|A�h^����<5��铯�|c�x^���x�Bյ�y�Zꖑh�x��v�d���#^��ŷ���ݵ�����s4�73Kqqq,��<�4�O4�d�i�r�$�;3�#�gv,ĒMgøE����yU��׏�jN�"���
�B�	�V�XM��͉�7�#*n�5�V���� � yM�(�ӕ(�'R	�s���	E)MZ�8���J*(����B�(�����|�����i�#О���[E{i4�s�_Z^Y�W�Vw3C"��FYg�����?�?i� �c���U�����N����{T��|R�ҒX�c�d����บ��=3U�� �%(�3� � ��㸔[��;�:��'����ǋ�6�=���D��].�J����S����<� ;���܁^�-��AJ_�hF*̡5��+���*20�r��Ehj�N��4�3i#P�[\g�:p���F|�|�m�r߻ +>�>��!�e�-�������Z?���b���P�O����[��)>�&�����E�M���w:�a��hƗ��=JO�u�/�� �/s'��wL�}�;Yן�O�~j�Ɵ����~�ǉ|/�5]C�Z֏�jsxgú��t�i>?�O��ƭg�I�h�����/�~�|����-K�׉��=�}|��X�|5�G���ko��i�~��?���]�����ϊ��j����ڞ��];�Z冋��Z����X`�?*���V�p�(�Bug+ʝJO�P�Iքa^	ZX�V�����=��=UNk܇���E�s�"��/d��P�n�J��9��y_���l�w��� �5���_K�<�:���]c�I��VJ5�R�v�]мZt��.��w�D:7��kK[m_D���M����� �'�mX?oo��7�;�f���j�>.�ږ���ˡ�x�Q����e�e�i~8��H���q��<;���j�U����Hk�-'�|s�w×��x��Kl�7�����Z��a�x{G�<K��-z��Rͨkw^>8�߅��.uM|Gu�Q� �h�� �8~�^&��|5���|R����c>��x�ᆿ?��1a��:?�>���@��߿����"�.�����Y�&+�7��T0�qä꺕���'	���Mb�9�U(�U��8�u�9�S�u
��Uԫ�]C��q�Z�=�}�c�4�%)rF0���[� m���W��Z�з~9�|%�w������x�T���д�C�>#��폆.o4�Iu���}CK�%���o�H�%e�M.�amu?�xS��;���|�
5�4]ķow`t�x�S��;G��M�xjM��a����4ok��h�V�x�,c�䰰��/.<e�ï�;��F����?푭x�Q�i�]�>-�a�K��.����ƭi��zK�V��]n7�Ae���j�i6����<]��7�h���K�o>���D�5��M���Z]�1�P�5u2�Ú���,t�.TXﬓL�f��?�b�W�]WR
�<D������iJ��kՔ*S��{h�0�x�l��P��F�_�J�,���)ҏ�!W�{
�4�*���Fk����>zhɧ�q�9/���~�<1��=��!���'�4����Es�*����KW��qů���nu��Z���IE�U�?d��.��}��m#ºe���\w�i�Q_��Z��ZG���H.��e��/R;�I �4�2�&��򘵀�7��Yԯ'QJ5_��:���R�ԣNP���9B1���w�8���R+���)����c.W�-9)J�c&ܔc�`��+�8����`��:��~ � ��~�->6^ꚣ� �
k���!�^���;gŖsC=��u=n�Z�6�����i��n5{}+Zյ]2=?ĭ��-�Ac0��!������Uv4KO�'���{ֽ��-%����wO%���h߮����g�
�� ��b/�:Gÿ������m��滆��Z��߅<ug�y��~!�~���@�e���xwX�u	nm����������?~��~|x�&�����?�(k���M�c��&Hc��lY���WҞd��4�/P���Y��?�<K��~�eC�Uƙ�&��'�c(<��xP�ø��j֣�����U��'����,~.�(�0u'����u��7����_��)[����q����c0����W:��:��N�gG�����
kB��<DW��C>0������ >x#ÿ�'�߄>�����F���m'�4� �7����eu}�i���co.�����a��(c�S��𿆬������Vz��
Mޱk��[�F����P��.�3ȫ$�l�溫>� ���~�~�G�5����c� -`� J��ἇ	��Uù}\UlO����O�����V�㇆#Uʮ"�:\��^�u*�s͹I����8��q�gx�xzX��<^*J0�ᾱVδ���N�*T権SJ�� �RG�Q^��}9�?�O��_�G�à��,��	h�':b����2Is�/h�n��M���j6���4A>��xm��k�2���U��������� �-m���.�y�x�o�A�9w~��֙��I#T�C�Զ��R];�8[D�g���W���<�7o�SX��9�s��T/*r�H{�W�	�Q��$�хv�RZ�r�N�/J��zIJ/I�$�{4~��M�?��Ai���
���� �������5�.� ��,Լ#���/񯆮����jOy��j�������^��G��I�=�g�� d�!5O����To���G��|<M�{�S¿<i�M�px�V�!���| �E�4M'�i���^��|Z�S��A��y�x_[:d�%��{��5����� �w�|�߆v�u��l�+�{�w~$��4K|u$w�~������v���Y���$��摢�e�Ѵ�:�M
���տg���7�O��ῌ|3��ῄ�~k�~/�Ŗ�Έ4�
� I�<Qg��<}�5�:΁��o����mm}�\xo@��S�2�Zŏ�I�˪C�S���CUի�TUj����D�:�]lO��KN8:�3<L���i��(�b��*��J
��rS���t��(R��U$�FƢ����|�ZE��j�o�W�xW�,��>�mwc�i��͞�ڎ�aai��Ci���[�����$�-<�������st����1���^�jx�V�m4�{��ڗ�<G���-�y�׵9�Ma4��M%4o��M{wc��u�z����������a���<;e�������=��w�t�C�6�7חþ3�m��M,��[������׺�Z��E�V�.�,��/�x~��z���*&��_��{��m~�Kmv�[�RV}���5�bŵ������;�no'ѭo5{t��1�<U55<T0���(`T�M~�R4����R�y�Q�TXh���J1�*R��P�a�8ڄ�
?X���u�U:����7��h�:u䩹T���ԧ�?.��5�]��_𞟩2jtZMӘ�_L�����\���y�ݤv��nmg����d'ɫ�>'��מ��MOI�,��5��^�����_^ա�4�Ӥ��p��:��#T�'�A�Z�k�j�i�h���%���cQ�Z�Jucҫ8�J�&�%�}��k5%8�jP���P�1u��#N��	�rs�6�4�����rM�R���(��� `��>���F�V�X�k���~>���BI'����KT��.�z�x�QӴ�Rx�9�ҵ魤K��5�g�>���sW��Ȳ�vk����g��S�a�Wxl-9Μ*b�.
���νJq�⛒yV]���,W�pX��C	JU�(N�H�U*�)8Ҧ��U���i�M'k4�W�?~��Þ5�v�⏇�9���g�|/�=�Q��4�yi����w����[�u�W�1��t۰A���"O�'�+� ���ϟ�� ����%׉�M���� �Zݍ���_�z�Cg��{qll��W�=���E�]�:>���,z-υ�)��R�M�$�A�'�ox��7���5��gQ6𭭅��|Z�ZM�x�L��k$��4-"�c��4{+2�(m- �8���� �G�^ʗajp�d�(cxk�xWS���ECϓgt���c2�8�z�<J�CGN�6/��� �[_�>k�b*N�3+���,�ۅ�Xnj��^tmj�s�&��Q�S��
�� ��w���y�;�Wǿ�?��f��ߊ�#�_xX��m�5�0��4��/�#�(����ף���M3T�mn�i��F������� P�f�g��w�?jO�����ax�I�G���?�z޹����I>��:_�!W:��%�ɫx7^��X�~�&�.��i������� 2~1~���	��YR�	�T.�yc�v�Α��n�&~Dg��H�~��e�.*\u�O��0���I�ɰ5��Np�m��C��b8[�ja��p��/�c)�tc�էJuR���%�q�C�ap�?�<6�S�x��:�f�W*��ʘzY�]����hT��t*]�Fr��ڃ�4QEL���}�*闷� �˫MN�@�F�ߍ��Zipks�Z���ZƁm�$Ѯ����[Kյ�2tӮ����d�m=�1J�/�u������gůEi�mW��������o�4� 	x��z����׈�|uq�뺖��ξ��}��������J�;H�yu-7��f���E�G�Ea�j��eڣT�$jJo�5J1��V��Mo�_����%�4����ҼS��$�}봣���>����?|c�x�ƞ3�����"�u/ �s�
��W^;�Α7���߈�h���Ğ�/4K�k�厽�7�V�4�2^��r�}}�|G��zO���G�O�\�W�<Skz�:����Ğ!�u����s�������5������� �k����Km%���=�?���!�{�σ�������w�� �_Y����2�N����~,�^�5��I���G�|?�/ĻH�o���)�>��/��W�b�'�4;=5�}{� ��>#��_�S� �gú��������_�C��<C���|�^�H������v���}�j�ll��<W����~�5H!�ioy5֭�L&'Z.�xb�RX�8��sT�b12t�ӖNX|d'Ξ���G>d����^� �Jn�5�M�<ʝ4�9*ӗ��(ɩT��U[���������Y�.� ��i� #�֧k�����c��>-��kM/O���2��᷌l$H���;P�'�}�k�������Uק��&�N�����Z��1�j�j^)��<9$���ot�2�I��mJ����N��㵊K��X�d������;�%���i6�v��������O���('�������OR���?j�ߴ7�k-2��iڊx�ᶞ�5����#���!���`󭬾2>���x�Չ��L���x�R׮O��ҼG`���xwF�^����H�m�mf���#�I��\nH���[�gP�7r?�޾}��<U��HЛ��iZ�Hի
kZ����kBSu\mO�Ǒ��n[e�q�gJ��wS܄�Ӕ��*�+���:ъ����$䥢K����Ǌu�b�?��A�	�H���F����dWa�kkI�]?J�ץ�%��{'�uOjЦ�m2������.��M�����\�iu21���F�T�<nԀ�����C� ��p���w�E�����?qjo�i��ٰ[�֒j�e����� �7�^�������:����	�V�9|�Ǿ7pY[}��H�֍gqcs�۫�5K�ú&�g�Gz��	/|�$��	�	5;9���m,�{mW��Q`�4�P�8?m������5N8��h���Q���T�LRúXwZ��FZf�H����V�oVj��u���<<h�JT��)֡B���+*q�Z5$�
����~;����%�O�5��U�m}�<�SJ�$�ktC��.h`���7:^����giG%��oj$U��|�E}&�`8�#�8{5�J�ny�cr�tiTtk}W����*�yP�Ts�^���X5(&xY^e���,�6�J���6;�AT���Z�j�vUiJPQ�J^�JnP��&}��Z��??f-vmz�K����?x�n���焭�]��|�� ��r�� \Ғ}?Aק�e���6�%��u��KjZA��n>y�E�/�ǿ��;���o|F���Bl�1��_�d%`�s��aJд��i�=j��N�L�su`��_���
�\~�zsx���gG�t�M<�׬t��,Ir�%���)��mt9oec-�χ��u{'�u<� �I�� �o?ࠚ���N������ծ�%��]0bG�kz^�i��L�ZE*1���a�mLG�y^
YF'�ߊqt��|�M���q�䥍�xO�.6QQ�2�Q�1��+J���/�ᆧ����I���1��m���IU���"�s�R��5L6U�8� ˔�ɹCS1���F
��ɩV����/�/��ſ�.Ou�FjS��~|<���i�i�� �V6vֿ������� ��������A����v�$�wGó��̿�?���l�)��N/�^��m�x+�^K�t���>	��Q��5=[T��6�jZ��ġD�fKU��Y�O�� ~+|t�eǎ~0�@�W�o�B��Y�^�u�\[Y���i�tS9�Ҵ�^I3L����F��G-��x]�G<�3�~%���o����3���P�`�X:����k'������X��Yl3Ej��c�)R��:'��I�g����Z�?�Y6��v������4a��s��X晒�aV-�)��	Ԯ�F�QE�����;O���+K���u=N��OӴ�(d������-�,�-�V�{���c�cV�Y]� T���>��h<���*���K\���o���=�:����z��'�u/��6�h6��[�oI��2�>��x_O��o�o/�ڎ������~"�@�����⟉~%�I���n��X�&�������M�X����5������:f�m{+���)��5A�c���e��
��o�������|U� ����מ:�O��{�� �.�ZI�[=xO��M���o��$�"�$I������z� �c����p��Z��L6.�J�H��T�*�\�i���������Ք�:��U���êqU*��˕�Δ�^)Ƥc�e9$�N
3�����>�{� |C�q�o�?�%~<��W�4˽�:G�-s��ε��b������k7��O�Z��.��^]�K�2x���Pk�zn��%��u���� �~ľ��:�z���� 
��x_�/�.<���U�R7��e��[�z~�����Ŭ��^��Y�Ф���O�ѧZ�I�;/x������K�ϊ�ǁ�~6��|-�þ	��č�������;x���� ��G���{�z���=���"�α�ZZ MJ���t?��� �Q��V� �w�S���ޣf���B��>6���R�X������]J �چ��D��������io7�>xm���_�x��05#]�iQa�㉕xƝN_e���Z�h!����B�V��UrZ�sk٩h�ZJ����rn�V����t�G���?����#՟�Y�L�� ���_����\��<ou�o�s��<-���Z�<k�� k��+[�៊�ޜ���o-���uO�����e���� �����O�?�o�����=;��>$h^�W�u4>]ͤ�&������ޓ�hڄ�ׇu�6km_�����kz=垧aiu���[�֠��*��g�ԓR���)Es�-���i}�.�ձ�8�����2qi�^�i7�)$�����W�[x��4:���/�/�n�M�-t�۝;8�n��sI_��u
=����^i����h�^�[�^'���O�=&��K��]���u-z��x���.��n�`�������GM�-?��m���/��c�<W�����-�1��/�?����K�	k�&�l-5c��N�������<W�kzT�_�?�K�i� �����&��h@�׍l�.|[��E�������𭽦�co'�]ľ�=������sMy}��v��K����N���*-����7꺁�`�а��e�o����BtjR�U8<:�l-z�'*/����pQ��*P���,$��bj�J�����5�:P�	��'?m(ӯJ0��>4e,S�*��V�yT�
qti�h����%�� o=�栚7��t�o�]K@Ik��;���pu{˻�+MPK=�����R�u%���^�U�������iOe���et���\FP�R�O�{iЉ-�ai ���Xd�6V?SxcP�f�_�4_i��xG����>%ֵ�_YX�k�kN��'��9{��ϩYi���%���o���~K��oUُA��Y�����+�$}g��捭]�zXh7v:]杣h�l`��u�o � ��=;H�Mvv-s�[%��� ��3��t�������ԩV0�i�i���b�)IS����8y��Ч��T�ߋ��)c#N�O�U��]8BR��k�R�&�-'�(�(SN�i֫SA�V�ʊ��S�>
�D�y�K�;_�F��F�6����4�{�;���6٘��[����S}CP֞{<P5��q�&��F;_�;]8�[�kP���T:|����˧��5�͌K-���uqb��o~��(Џ���`jE�R�G��U(Uq��N�ԣW'�Z�Z�i��Ҿ�!���-�BVQ�;ە­4�e$�9��q���N?ß�J�AE{f��N����?�|	���<(��ڗ�jW���q]��]���h��s$��q�,kc;Ϋ�m��M���Դ�K�+�x�U�<?�x�I���E�啟�γl�^-�[�r����{k�k�r����5���wS9�S���:�qMS�V�r�I':��)R��*��RjI�d�r�T�N��k��.����U&��AZ�NJ�+�����j���o�h�m���ݳ������{y9�7�O*��$��QG$���X��r���뿆� ����4�ľO�^��3⯇� ����>��K��5��5��k�J��J��K6�0��i:=�kZ�x���oS� �[��km���������?��B����(k=:�=W��X�Pռ&�5����Z�z���/A��m?S��4<w�oi�o��2�ľ4�l>$���/�u?[���>�&�.�<W�x{U�};��wf�l^��ό<=拠��0��񮑣|�/=��8a�T��b%����2t��5R�X�u�
^����y��kS�����G�ǥG.���"k��%��4d���r�tiNRQ�~ڬT#	¤0������>4�Gi����|B񟋟Vҵ�'��M��+ּ�x���N���x����V�0�d�����-<K�+w��o��k��w��x��Y�����^&�>k>�~����
�^��S����^�� �4&��~��¾��>��Y\��mBi>�&��=�{���ܾ� ���χ�>x@_��L�Ԛ=v�QռB�#��/���˘���=]��(|6���$��)��*�6������� _�w�3Ķ�:��K�|�s����(Ig�x���5-Q�7�"::'�|G��^&6�"񕇊���gM[�i:���\{�k��F9�p�+(T���USn�����f�1��Ӥ����YJ�Ll��\d��ZOg)*TS��]X[����M{&�R�� uUB�#F)rѕ��G��� ����ߎ�_�����c����kQ�����뉼%�?�z���'��(h�	�`�?�<o��Caik*�_t��!ay�ٴ�������|���~�u�� ��g����K��3�[�m/C�t[8�4�6�Y�6ְ��I�`�O,�I$��W��<2���9�R�����9I�)JOV�&���ݒVK��T��gQ�g{E$��$��$�ItZ�ݲ�(��3��1��W�A�3��ύ~��Ŀ�>Ѯ��3�z|Z���i���rG$O�[k�K	�u)m�-6�8o��[�!�?�� ��������ѫ'�_�&�ӿ�j��|K�?����w��p�=��%X��9ll�#|=�l/��
Y�ڶ��I��[Q�ѯ�M{���W&+�������E?gQ��g��(���A�^{J�I5Ӈ�V�?��J�8'h�)FOF�������ox���L�:��I�c��C�n�m�i�N�w����I��#Z��m��:&�4W��ڭ�E�ĺ-B�R�,�㿴�Y�xkNӼ!�F5�A��jR�'�v�wq�ɨEi���.�g��������'��W֮ mgO�N� \_���{� �� ��jI�?�?� ���m9�����gSo���gW�O_iV��:78��o��Z���y]��� �A� k��3����]��s�+|^�3�Mx^-fWþ��3�ī+EMM�Dk�>?|=�<6�\���~*���w7��p,���8솽L]D}�4��nHӣZ����2��J�.�U�y:ʝzp���C����c��E��jB1R�9եMQr�/g�J�iʔU':�ܳ��J������� ���8�/<0���b�\�,�uG��}�Xd����w�G��K[��:������Εp� �w#Yг�a�<2"ԣ�}��j��"�E��g�_x�J�Ι}�Yh~�iy�Y��n�m�k�?K�����O�PY����/��H�*����u�%~����м:��zǈ��;Ծ.�>'���xfD��S��Э�Hյ{�
��V�;kl��c�����O|&��u_[k_�i��Y�{�Y��ϮxW��K���z�6�h�ց��.��P/�'�&��8��'�-+OFԭ�������⠩�}�9ҧ^�.���?������x��Z�*�Tڎ�<4��[
���hb�^���^�p��ӡ*��tqF2�_a
��
�u&��9V�T��ug����+�k������Owi����3�xoUԓ��x�]��֯5�-��5֏��Z̚DRZYZ��1������ƚ.�y������j^����ZK?�{«�L�q�O����ؓÞ(��<}'�|cs�:&�sj��^�>�ms�����c��j��?㟌�%��=��tz'��]�O��z}k��M���-���5�Y/"�&i��M/�����̆��φ��G�*����D�+���h�/
_���/�%�g�W�!�w�d�4�[�׾4x���.�pWY�uHl�yK^�[��5���DҬ>[<UZ��T�*r�:<�ib�
�V���¬�T�(��K�.jT�bg
���F�!?�8T��jэOrtZ�R�B1�
��M�JM�oAr�c:|(�/�-�5�鷩�_?�m~�<:e�^�i���}Վ�t-R�/��k[���zm����tT�{�i�k���j:����4�x+�zX�.�g�]+mźǆ�/��<#�w�<]�#Z��-4kK	�TP�Y[j�����a�x��_�g��	�Y������?��.��[��� �>
�㟍5}:K��=W����=�L.��L����,�ipϩZ5�Ŧ�>�c�x~��H_��	�uy�O���n�m�GU�[o�o��.~ |^Ԭ�6��M��w������[�� X�K������M��G����b12�)b%	r��
�a�*�N��O	[�­z�98IAV��
r^.#1��R��9�M^��N�R�_vr�\���n�:��\��Ҕ��L����l�ƿ��%��5�EWğ>��(�|G�����~/��>6�KO'�u���ZеKc�]��Z.��])�/�:������k�;1w��x��W��9�g�� x����?�/�;E��;�h�|B-+D�4�{];M���m����(Ԗm���먯��a(ac�J	IƜg?�?eJ�����S��ѽ�nf���֩Y�r�NN1�iJm/���v���
(��L���
            [firm_left_thumb_ftype] => image/png
            [firm_right_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��I�z 	8���9$c�'����Ń�3'g������x��������>�)< z~c'+�sK�G\t=?�篧L�����k�O�M��?�Gڢ�`��l�S�?�y��Z��ר'/l}G9�p~����*:��'�H�!Q����X���������E��h}�����t?��M��C�������4c9�q� =�>�2x���� �C�a��~�Lv�Gğ��>�I��o�|-�[�~�Y�v~#�t�
�Z�$i���V�jWE�G��i�P�W��P_������F��o�=�z���u��0�ugsZ� �?������c;��H���5�a6Z&���̾��lo?�G�����2��<K�㗊��K��v�i��3,�x/F��o�|��,��^��1�ion~�u"I�j�ڵ�����^x/���Nc_,� ��ѧ��
�Uq������򭇍JT��!�P��h�U*�_c���<�8��֖�ܪ�&���ٍ�֭�k� �����9v6�1R ��s���)~��4��p� ��{�װ��C��-��xK�0��|e,�Y�<;�+�g�o�i]�u����C֯egy��^�V�12���t�G��O���+(e`T��  ��z��2 ���q�g|�V�s�;sU��F_T̰|�C����kQ���z�Ԫ-#)u�qT�t�V���BV�2_��KTG���yG����s��h�T_���y`u����=��g56 �s�����3܎1�Gy0�9��I9>��}|q�C��A's��l���}1�ޏ�ş�kߟ&a��.��q�ҥ��<�<d�u���ǜ��N��I��|�&� x�s��=9�� ���5*u��I�6�A�r��K���_��?��N0�?.?ڐt����Ӡ���@���� ��cn��bz� �ן`3�8 p1��x�<s����� q�9s�t<����gv�zg�c�L~]{��^W��89�O_���R�8<v�I�`_q����7_��~�c����n����A����4 �㌨�7q��O@?:������~��?�]���F���ڴvm�D���Ir�� b�C��2�Ե�n�3��h��Q���M�����>5|h�m�<�-��O��(����h��^!����������>� U���M�4�T��SԮ���"�y�C�l��T�)'ď�(��)�]��C�|=���gጷ[��ti$���6�mo|q�h�}f��i�����Mg���� �x[��8殪�8k-�NY�a�*�I�-�I�Yc1���(��K��R���k�َ>*ZZU�Ji��M]{�췛\��5㟷_�������|h��z֖jn4������o�8�jܴ�^�@���l%߈uǊ;�wU2\ȶ��i�_��q�<g=����Rm�wu?N�� /N����#�����x�����tb�F�����G����H�4Y���m�-��')��/#���J�]kR���T�b��ˈ���<,�5|\!��8/���n[��W�ݔh`�Jp���MT�b*N�|��թRU&��J�F?%�R|ө9���k9Y��$��VL�M��܃��#�c\���� �?�M��_�����b�6^���{��K]7᷏�+�0�����Kq"���4=Yγ�޳���@�`��O��گ�?���j���X�]�&��Xt���ԭ���������W�ѵ |���n��SP�deX2�B�*J�pr����H ����~�_xN�*�ib�8����Fu�U�S�a�%�^�����gB�i֧Rt1��{8�/��)^�I��_}�4��%��������Ќ��=��<w\�9*q��'�Q�nf����!���~#G�_�����YO�pCk�|����	�� U�O��5+�|m*�xo�r�tq� f�3����O� X�$d$�r3���1�g��r�g|�b2<�%Zw����RxL�	)5K��$����N�(US�Z1�	#�p��X�Q�I�=%�S��p���דVi�����랹9�_��4��r���r=G#�^�x�HGL��a�H�=#������Oa���:�s_&t�'�Os�8�Hǯl�q�!������cv���<����z�~�?�#֘�:���?�n:���zz���� I8�#��>^9=��� ק 0;�ON�A�G���l��r�[���q�c�/a�#C���#ۧA�.��?��Ӧ}=Nk���+�� �� 񿍵�+����x��Z��:~��h�e��_j���$���D�H�� m
�@;�7ZA=���[�[E$��"�bC$��,���q�I$�ʈ�Y����p�గ�׊5ُ�v��� �/�5�_x�L�X�㇊t��Er�FU��q�]Fe���^#�x��e��BH?A������\��W�R��0����Pr�����h���9eO��uf�9rУ^�><n2�
��=d�ì��Eo)tZn�:� �b��'� ��|P����_�ʿu���A|; �O�����4���W���d�m�m/�"z���?�sm���?89�� ����:2@���>��+����p�w�A�@xW���ߌ>���h�ω�}�/x>-;W��3¯�{�+m[��q��Vp�y��>��[���\�/�A��p�px
Q�rL��S�:����<��ԍ(:��v*i�\��\Ey�S�����ζ2�4�5Z�KV�W�-]��7�J���ԏ�!��~������� ���eυz�E4�B���7���[��#j���������h��Yxb�k�o�7����� ��|J���� f�>�E�C����Q�_�������4���T�|?�iz��k�h��њwk��nm.�l�#���o�C�T� �4�|3�o����� xC�����;�gÅ����6�V�!����S%�t�����^��-��9���?��?
?mڏ��b���]�޹�6K�x��|��}O]�u�����zCx8x����חSE��){af�f�,iyqݬ6� ���O�<S���r<�>���S���S�b)��d����U)�?��F�\Ƶ9:�£	<%������n����S�E�'�E>ž��D�j\H�$��	u����-X�����ʢ�����W�ƣ�G���x��<g��>�n��[@Ss{���4z<:��~!�?���x�V�e{�:�t�j���d������?�y�����?��tSg�il���-�Sx��S�,ZW��-{"�s���w6�E����s��P�yl��� �&�����5�z����1x����K7�>#k��~Xi�[[+]&�C�l�G�ȴ��� I/�y}�O����wQi�k� �� �\� �D~��8����/x��K�[�/�o��'�|	�y�Eă�4�R��[Z����<Qj6�Aqm-���麅��_G~<����yOd��#(�aM���c*��q�,s<)QpnT�����q�%*�x�Ќ+~���]��_���9>_����VX��j�?i?���,��ZyC��G-��qV��[���[i����[{�y#���	��Ya�	bd�9��H����Ȫ������ ��൐|i����[��!��e�������{(����FfH��=�
��N�tcoC6������ �<��-����j�τ�G{�Mf�I���W����n���|7�}��M��}J٢����T�c�A{mg}ͤm��Սխ����W�s�ygyi<��vwvҬ��6�02Ooso<q��O�L�$L��G��p.C�Og��T�?�dٽ�x�z�ԩ�(���\5h�,NR�<M+kN�(֥�>[[�vj)��3�j�i-$�啛��G$� �`���3�������.��� <g��GrI���� @� ��C�GYx{�I���A���2�=7��mJT���6�anLZ�3��?��u��2ʾZx��3u+���-� �����s߃�'>��8������#�pNw�ȳ�?���|�kB��c��rTq�:�/kB���J�jP�
u�T���bib�F�'x�zJ2�n2]��ut�hB����מ��wS# �Nw?������=>�q��pI�zq�瞃�c)��H���q����6��\~����q�q�>�9��<Ҍ�� t����>�A�4����'�a����}�:����<t��O�9��\cP3�c����?��ߴ���k��-WZ��-�]CP�w�����=��%�c�"$��>կ��Z4�gVB�F��:��߿Nz�����ؾ|z����K���/~3�,�e����w�-���O���u�6ڦ���Q,�B2K�g�wr�{Y�lm�5]���;��?��_�P��u�|2�G����乺��?��x^��>i�4^#����麯�u��x��͠����m'T� I/쟣w��E���y���Y�+0����sZԲ��][	���8|^*T�Ԗ���^�9*�7G����^�ZuiBU��R�4���Rr�1��2���V�����Vz��Npx�	'>�qB���b8�{��u�?�~��#w� ��U� ��~�7~�n(� �7�P?��~*���}x�?�7�����׃���H2��l<?�b������[�����}�����n��p=����+��߿�'����X���F6�iM#I�^���f�௄�R�o��̫qg}����ٖ)#��F��"5�A� �� ����0�������|I���?éǞ"��>��:��yl��-��oT���V�]/u���>�5	%[�J�_��(�(�#�4X�5T�DU�""�*( �����?���x+��,&;�T���7.���a�JR�e��a�T�'*��/��T�pm�Ղ��\�P��U����F���K��,�kOv.�g����+� ����~��6��'��]���L�m�X�=��}��_���<�M�I��lGo�u׬3WzE�6[ۻ��-߿�������?�/���_�����~+h�k~����k�P]�=�o���"�Û{@Ԣ�ִ-F5�5kK�����~0�����(x��>��<k�S�~���xg�/���$�����4�z�� Z^�5판=݅մS��������H� _�g��nië �����:Tp������3��T�������S���y�J�V�I�(sf�d�_�a�Jt�6�t�7N����o�m�'�|�D�� !F2y$�q��� O9�ӧ`���c�>�=���L����T� ���S����� ��v��#�j_�sw�����\� �߁���]�}�k�?�׃���H2��l<���� e�� �j���?��ko�/x�Ğ���U����?�����xZ�Ny���ZN�m�h�6M-�:����l���@�<�N�5�Ώ�\jp���q�YO�[���{-�Ow$���gA׀2z
�/?��?�@�zƏ����+�|;�W�]oN�_��]kZ��S�i�h3��<9��.��M*�}F�M����u��Ӯ��5�d���4O�^�'�|[�U�U�|�D~0��L���5�W�4�P�S�h�����V�HY��J����mm��)�?����a�qVm��8{�Ϳ��.cW3�0�'�������K��h��N�HNt#[N�'����d�j�zUeZ2��N���{�m˕ꮤ쬝�{Y#� ��ߎ��9���c@��es��n�Î��O��� � �ǯ9��`�q��䏚A��zw�=z�f=����qC��+g���l�8�<҂v�w8�:w=z��^[ >\�� g����>����q�����q��d@��O�*w�y����l���F���W����?ſ����%�|I�x�A�yg�况m$76�7��B���ME��B�e�O17�O���@��!w�?�K�x�g�a]>�~�N����=k)��շ����>�S�-$Rڛ�����M�xm�=si��=�g��rz�󎧩��_�)W���c����|k���V���G�E�xO���
};�E��������9t���k�	<�s������性�f|���
�&��e��,χs�T�ܟ)��C/����.c��ףW��=��kҫ/OJ�qX�Q���aV)Zq�}�{sFJ\�/�4� J�!��%n����E�-��J����� ��?�������?�K|[� �@~X�۷�� ����V�e.:� �e�\�����(� �]o��+_����2����G�q��~���}� ����u�y�?��� #��y���� �%� ˏ�� ��� �J�1���_�e�-�u�G�y����� �+�x���|[�O����k��� �]o��+_���9|W������ �0�.������O�� �������a�ڏ���� G3� î���� '������� �K� ���D1� �����G��ű����#�|�� �+�� %��8�E�-�NO�R�����w?�_�������� #����޸���� �]o��+_�����_���Gz�Z?���<�� �//������[�� ���/�\Dg�� �V� �u�Q��~|[���J�^��� ���J��<T:�� 
[���� ̠1������������k�R���+��Gy�w������� Ek�R�@� ���n��zq�� U�ѿ��g� �\��S�O�����O�  �� .?`�k�8W�v��������}�W�A�__Ӿ|<���x���'��o\C�������ZN��$����o�V�m����ֶ��v�[����ş���˟�߃~�:��>#]�ߍ~3|Dծd��>"�c��?|_�j�7_o�&��J�t+MM��F��� �� ��Q���jO�#���w��  h�|)�~�~+�ŷ��p�t�'���V��$�ɢGi���ꚢ�?ؤ�m�������u��@�߹�_�x�_�2��8S��ML�)���g�z����s�T�x7^8l,~��a�UӧF�:R��kʢ�V�j�(�9b1�P��:T��i�Y�IsI�T���n�V��&H�02;����s�M�;{`4���l:�|��i��C�����:}I�L���ώ��pG��'�3_��U�� 8��F����9�� ��:R��HǧR��^�F(s����� ���z~>����7�q�1��^����9��G94^��x#���ӮG4��0ߧ�=��$�FM `rq��$��}:sHa�T�� �׷��?  �}���<�� ��c"���=x!y��یc��)���z� ���@�\�'�q���8z�s�3���?�.�}��C�_�(��:O�;Z|U��|����o��ś��5ּ-��C]�m<��{�r�ZC閺�6:=�����lmd"����[�
i�Jx��_�QxS��пlO��?`�|}���_��t/���7��8�f��G�-~��F�}�
�ZZ�wR�%׃�|=g�A��Z�ɩ��?�)��-�?�������0xO�����������x��W��+�c��7�,��6�ö�#�ɚ���חk�{{Y�L@�%�����?�Q���-�e~�� �w�G�_��������i_~x@��ag����v��MkS�Ɲy~Z���Y�`�&���X�M��_�-8�]���y=-u��}~	��� &���ς�M_|H���#�����_�C�������U�+x�������	���|Y�k_j�/ï
�#�:��</����ŭ�]>��ݯ�%o�o���?��ψ_~;|��|A� 	g��7�?�4�Ӽ?�O�7��P����s��J�Na�w���-m��R���b|/�� �8?i��>������� �W�>&|���7�>�@�k�3�z��O����tI��l>(�� ����]�W�B�Q���K���B��oV��+���� ���[��1��_#����� �O�w����7�z�� 	M�������ZE�ޝ�?
�֚=�6lW72����{k Zr��];��� �5��l�1�Ooc���0�w��y#��G#�'�Nx����q��W��Ԍg=��2rA �C���sߧ�Ўq�����~�`�����Y��4-}6�Wִ�*�Y��O���u[)�K�^4��O��h���Y%���I;���.ls�=Ͽ'�'��@	ӌ7S�z���z��=�����$w��}>ǡ��7��ze��ڍ孅��f[�������5��f���(��4��2#��JԴ�cM��t��=SK� [�GO�������m��-�����x�d�hdx�FWG!��]W���%�����n.,�����/,���3B�ͫM�+qa$&X'�H���
7���8�K�'� �����>"���^7���>:��k��E��c�_�R�w�lO]jwp����ï���j�!�:�?���ƙ�n֫��w���$�	��3$ysG���)T�r>>WP�`f�P�o�E�<�7��� ��<9���ë|A׼}�߈~5�_� �u��ީ⏈7����u[�cH�Ğ+��o\6�h,<E}.��>�bx¿�W��v?#?k�x��	��c�_����{m�����}�/Yx�ƾ*����'������X|}�%����)�SV��]{V�5�\���j��J�M[�sO�>|X�E�Q���d_��M�����(x��?�|u���ޙy�/��� g|Q����z��5��~%�����_�/�^$��m����4=��h�~�x?�&�Ꮗ_>�:'�~,x⟃?�[|A������d�W��Ek��X�>��g���o^���Dֱ.��Y����jZ����M�j���s����~��Ԣ�}��o뚦�e�W��?��:�������_�1���k�ޓ�[˛�-"��Y5_T��Sw�`�O�:/���G����O�]���_<m�N���&�?�� ��n��x�Ǿ	�%�ƿ����~���n�U�H|5�-;���_����Ŀ�~!��A�!ԧ�_�)�o�?�MMS��z汯ꟶ���o<%�|C�~i^:���ŏ?��Qwc;i��� 	�|=�}�^��K6��-�@y���������k���kr&��z��:O���P�7�._⭧�]sV���k!����H���o��*�5߉�� k����=N�������٫�wǯ��o��T���/��G����+�㈴��=f��B�����蚞��� g�_鍧k:�f��A_��~F�w��?���Q�|F��?g��~�_ > �V��+���>���U�Bi����WKӎ��ٮ������M�Y��-ig��K?%�?������|� ��|��s�/x�	� m��� ��S�J�࿈/������|W0j?�����t�-c�Ɵ�?j����M=/^�T���ӭ�Y� S�%~���W���t���Ox�Ě��!��F��r��������~�j�Q�</��x~�X���=}�WYֵ������j�Υz��K?��X�3�e�1�V{��ï�_>
���/�|O������o��`�Ԟ����ƣ���5Mv�M�5?�~&"=oB��χ��/M�Xd
M.��t���G�?������C�jV�u�������F�Kxo/�������1�&��~��L�b��aW��� ���� ��~>~�?�O�|K�+A��t�{��ǿhZ��i����O�>*|�I�8�[��K��k��+�>>��]B��m2� �w�M�#��~(�ğ�e��жZo��?e�|<� �c�7��Ǐ����<W��Q�7��?jZ�^����w��똾&j֒]=����Ʋ�V�%}��/�O�5�ž4��?k�>
�߳� �|?/��G�u_��&{����!�hP�777��� �E�z�r�jhb�T��y%���~X�!������)���#��-�x��,���o��g�|U�Z�-�o�g?���g��om����YZx����������ޘ��_���m_��3���O�����;�3�~"��g���|P���/��,�1��_� |����3���O��������xz�W� �oY��������V�����G�	��*j�����k�Wÿ��]���3�|{�KC���E���O�����֣�5�v�K��-SW��ץԴm'R�S���)+���S�b�Y�-�>� ��q�/|�'�7Ş"���o����*Gk���o5��&���9,� �^�<>���[��^���$O���� ����;�����_�	}�l��:_�>-��Ɵ����g���	�4� �vg�W�=C_�v��x����ǋu��1�W0��𝆌�ǧ]��������~:k~
��|'���Z'��߶��,�c�~#�)�W�I�����M����G�����C��k�,���|9�kڧ���R��G����mAaҴ?�l� `���N�a�<�����m�O�[�^����9>)x��������'��>���j�$�t'U���7H�-毧�ื�_,����Lo�?W�qa��N�^�i��|��=���O�����^;�U���|%��� ���Ï|@}w[�񿂼+��O������]]�i�Yu��� ���W�~>��_�x��]����>�	�wß�O�|{���oi�5�CĚ��φ�����?�.�=�h:������_x������|ڄw��_���N}����UT�{�^���+_� 0 �G9��?�����mO��׈�5�H�ox�����O��t-K�/�Oj2�^/��]SK�D��
���3�x�_Ӿ ���Uׯ�]F�Y�ֵq}�w�o��
�	��� ���6����>�cL�g�,��{X�>�e�����u�~�Pկ��iV�Iyy3Eo6�Q v�+������zl��ru9V�01���y���O?�1�^:�� ������F\��s��g��˜�e��>Z�� 7�?�<P"l��<���ߧ^:
7����x�y>߉�P��� �����>���׭&�����J>��3�G��?��� �?+�L��3�[� �I���i�G>��?�1Ҡ���j����k�	$���R$�����`��~�z�5����������g�m�=�>%h_�<}��P^j?C�a�?�W���V���M���ŜV����^�t�cMӤ���g�x�㟁� h/�{�?<1��.��ۮ��$��V�~9�t[!�Y|I�.��B�յ;������Ӵht�Me�/^�Ѭl��/�-4�K�E�P����`��xc�{��-�E��i�FDT��w�g�i����� �����z���L���~"��w��^X\��:LZ���)w�K�?�� �Yj^>�D����_�L�b$��kG�k��_�o�� j�7�f��_~���X��/�!�����5�[P� ��ÚoŽk�w�l> �9��� ��'x�T�Q:G��ˡ�X� I��1��'��1k�u!�͝0F���/(ÿ�&X�5���no�5;�M>}J�&KBm>�[�$� \%�ۆ��&�2��%
����yot��i�g��`>8�� ���?�?i�-͗���+��Y��2'����� ���}up�r{7�����y�n�����6�-�^��:��?�{�n��K��������� m��ڧ�� ���>8����ْ��~���x~�ⶑ�O�(��k{�> �	<`�Z����Y���ÿ�#hZl�`}?Lc3�>�h�c�4��%�7|��4�� X��tK�l���Z�;m@�֟n���3ZCw�ϊٙ��D�A(J��{h����Z_����2xW���W� ;�Ѿ3�O���m�O��?~�������x���/�{[�im��w�Ɵ��x���\���˪\hj��ԓ�2ˣ���N}wT���������u�~��t��:��-t�7�	���㞪|5��}��+o�� �|2���{��>�aae�\i�����?�_���������W��ƿ
��%1Z�yku�O�<;��u���y�jz�Z\�������cgyc�����k��K/�WJ��tȮ�o$� Z[�J��G��u]J���5mR��R��ﮞK��]�7{|�vK�� �;l���=3�g�q����<�֔�=y���}��{��d���t�����OzM���p� �מ��ݳ߹�h����Y�^l�Cӱ=�@ �����S#8_l��92?N=�?�9�'?��y���zs������VU
�q���^�X�3����PS�G��mQ@�=�B��( ��( ��( ��( ��( ��( ��(��
            [firm_right_thumb_ftype] => image/png
            [firm_other_info] => 
            [firm_bank_details] => INDIAN BANK
            [firm_bank_acc_no] => 6055720590
            [firm_bank_ifsc_code] => IDIB000B119
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 4
            [firm_own_id] => 101972
            [firm_name] => CLD
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 293
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-06-03 18:03:20
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"SJ","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"SHIVAM JEWELLERS","firm_desc":"Every piece of jewellery tells a story","firm_address":"B.T.C Road,Howly","firm_city":"Howly","firm_phone_details":"9101618753","firm_email":"shivamkar54@gmail.com","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"JOY MAA KALI","firm_form_footer":"","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"18BXVPK3167R1ZA","firm_since":"2022-05-03 17:25:53","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"image\/png","firm_right_thumb":null,"firm_right_thumb_ftype":"image\/png","firm_other_info":null,"firm_bank_details":"INDIAN BANK","firm_bank_acc_no":"6055720590","firm_bank_ifsc_code":"IDIB000B119","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"4","firm_own_id":"101972","firm_name":"CLD","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"293","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-06-03 18:03:20","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101492
            [firm_name] => AAJ
            [firm_reg_no] => 123
            [firm_type] => Personal
            [firm_owner] => Self
            [firm_long_name] => Amber Akshat Jewellers
            [firm_desc] => FINANCE AND SALE
            [firm_address] => nala bazar
            [firm_city] => 
            [firm_phone_details] => 9412591853
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => d41d8cd98f00b204e9800998ecf8427e
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 29901710
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2020
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 61
            [firm_pan_no] => 
            [firm_tin_no] => 12345678
            [firm_since] => 2017-10-09 19:19:52
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �ڃ�7���?��>� �T?ࠟ�����~����� ��Z��|Agie���L6��xc\�y��s��V�G�u2J�_�T���E���'g��j~���[�+'�� ~�:���c�o�to�ú���G�m/ᮔb�F��ҡ�N��������:ds���R �/�/�?�V��D� �z� c/�7�ߴ��������eO����ٷ�_MΝ�[�z&��y_��khȗ����7��+��mďl�?7|go� ���?����Q��3�8���e�ѿ�m-W�?��4ω߱��o��^�?g�z��%�\]2�M�� �u�]?������Vv�l��T����������_�S� x��
Y�f�������ثR�M���Zg�>j��Y����Z�;�_�x�G��N��O����R"���*���� ���Q�H<M� �ֿa��+���i�'���o�� �w��z���ï�`𶸾����x�Tk��~� ^�tYu�cO�.췶��+v��c� }��|i�Bx��
o� �������������d�������}⯍�4/�?�ߋ_���2[X-�{u�|Z�4� ������3h����ׅ���?jO�O�^���g'� �}~͟�`o��!�꟱���۝C�Ɠ�����^������{�/�>)�����?|��KR��V�&����y ~�~ן����/ď�%��w���_��_�c�/�����~8�c����j� �m�S���?����g�R�>8���]ZI�Oxi-�Ү�҆�E�>�?i��[���?iߋ�P��+� Ư�'��ߌ#�%��o~��0���_���O��<}�_|��x�˾#�F�u��CO���F�t�b�ta��/���I�6�>0�a��� ����|#��>'�$��������௏tKy�5�'�`�����k���[^C����SCw�����ݨ�GQ� h� ��~��;�����{T��� d������ߴ����wL���g��x�K����A�q���|a��5���~i���W�Ɲq�CS�����+��q���@�e����G��_N�?c+O�Z&��h�����l���4�� �����ui���l�Q�Z��T���U���O�|��$���� ��~�S�M�7�<~��� �7|�+�~��h/ۗ��� hό�6�w���-�� ��;o�A�|r�<&���C��x�>;��4�;|���]�0<W�?xo�w�_�'����F�s���Q~�^>��� k+ψ� 4�^��� ���k�9�կ��=�k�V�����S�3����WV���moom��lO���������� �s����}��_�/���?�A�<�U���Ӿ8x��_?g[�_�%�xN��� `��Y}kX��%�e�xK�������� ����� ��� n� ���,����~�P�>���B�>1�n��_� f�64ټa�a$����v�k�.�q-�bWeQ�w�c�oO�� �G�?� ����"|������k�4?���:�V�����~6|<�]G�&��xSD�!�њ�ؽ��f8�IG�'��?ڛG��?e����{�#�
G�0��_���n��?��>��g�0��%վ����>�;SԾ.���.<e�o��E{�x��G�N��^��xS�c����i�T���%����[�~̟�}
;_�G��� �����(..��� ��3~����kdY��D��2���� �
�� 7��l9�6|k��� ��?b� �'[֮�?a�|I�� ���'���t�f�a�j:F��ѼI<��� bmS]���kt�?s� `�:�h�I��r�Y���ߵ���=�� �q����	u� �p���.�Y���o�e��Z/�	�'�=KM�k�ڽ��$��-��>�l�� =������?�� ��h���h/�'���?���߁���H�<�/��x�Ŀ4� �v���5����Js��~�|o6��x�ܗ�#��X��	!�7�T��'�ؿ�>�W�%� ���K���^hw�3�m�/�_�#��C��۫]2⿈qi�u�v��y�e��tO�̩ T~�������Pk�� ��-����5���߳���\�W��?k��������rOi��ͺGŏj�G�twĒ���<xd�4�b�s���_�,_�7�\� �����(o��o��a�_��1�~^��/|�g����R����hv��w���L_X�]�mF�{�u��.���^��{���K� I��+��� ��D� �Y�7��?ڗ�/�u�0�ۨ~�>)��Ŷ���ˤ�l>i�Ѵ�^�鶾#��Wie5�ְ��� �|��6|.���O��oğ����{�B|+� �~���[��/�|�'�~-xW\Ҍ�F��?��ƥy�t�Ah�#ҝ�+��a���e�ٷ�?���� �� �����?o�ڇ�d�}�O��}���o��:����,���� N��@�[e"�Kx��koJ��?�� �!jW?�L?���S� ��� �I?i_��?����C�G���9w��OF�4]HZx���W:��q�iڎ��F�"�]��喩��%��޿?u���/���q�؇�����\~�^9�U� 3��?hM:��7�������x�_ռ;�B��d::�qk%���[�gF�d��^��^���h_�I/�?�)�� �I��P���K�n���g�ߌ?�׏�[�~��4� ����桦����U���q��R��/n%D��i(��� ��~�� � f߄6RxO�ğ�o�k�	�~/~ݞ��?�%|񽦿�E����2�iگ�~$X�o֮����i��k��O�d��<�p��'�	��[� �N�a� ���?l��(����#�z�c��ٚ��[��|7��g���4�/�^,�q�r;�_��M���|>�_xv�kmY�����^^W�� �|� e��;�D�� �A�$� � 4��E��4Ms����&���+|�៍n�C��?g�Y���]��y�Rkv��xF�L�F�����F��� j�{Ğ� ���E� c/�+�������'����}��E�?��� ��+��9�=5<�'���/�_�|(�z?�4��p��k�7��5�1� ]��>����W/�,5�Ư���� <w�O�-C�ox�~~߱x{�~�_x�㿄tmKZ�o�+Tմ��6���l�5�-?����S���>�+�d���&g���#��1�=�ğ��'���!���Św��/x��x���x��P�,4è�����%^�gf�H����?�?�x�V�|t�ğ�(G��� 
��J��������Ja�ޡ��	�W��O|$���]��ǌپ �X�~�� �|0n-|!|�����Ɵ�ZO�>+���#���ߵg��H[�� d_ɣ~Ϳe�M�U�<A���U�A��/�M��i�ض��^�t�D.-��]bp�����/�������~��Y�� i�տd�^�_��x~�Ze������I����k��_�ރ�X��������q.��;�� ���X�U�0� �I?���^���	i�H�����#���o��c�[������`xw�֖:� �_�u��;]"_�zƽ�xz�P����١�t�e�ex� ���s����g���Jx��A�}\|,�g���w��C��ټx�?j߇ �l�~��<\럳o���K��:\�O����,z���4��ʮߧ��d?�� �Q�_~	~�_�U�ٿ����~ۿfI?c/|Z����AӮ|!�<��1|X�W�xO��!MO�~�&��|U�x���Xhx��2�"�0�� g���z������
S�}x��:�U���׎� h� � �.�!�������V� �C�*�F�d��?j��u�EuO	����މ��?����we��^k6�U�g�߀?�%����6�� �N~�+��k���'�~����>I�$� �8�k����F������<{� 
��/�=kK�|c%�Ə�?��"������|� �������no���L���~� �4� ࣷ<+�=I�_��O������#����=�i�_�i>��� �Dgơ��W���?5WT�!'��/����?�?c~�_�x����K�t���� ��ܾ������-Mi7���2~�
Я�3����6���Y� 7�C����� ��S�݆�{�9/�-����������� �%~��8��5���|]��_|o�������?��V��i�.��M�S�wJ��񅦉�<S�\�t}"�Ἢ�~~�� �Fo�W���v���O�)o�� �_�}e��������=k�'�^�ky�|6�A�	ҧ����|H��i��ߋ|W���ዛ����:Yb?�_��S��� ��oؒ_�߲/��U��/i����)�"	~�_���^���,�~��B�e����$_x��{�Qg�� ƚU���/�m?`����_���	�e�k6��*�����5ڗ��� ���� ���?�J���/������!�?ǃ�Q���|����,��\��*�z� ����U��?�
W�e|A� ��|[�a�a�p�쭫~�_4� �"�ž4��3�~-���
�s��zB�_m>,xl�s]🆬�<a~�����v���������
5��5?c?��߃�jM?�7��������?�'�~	���#��ŏ����xt��:��so�W�ǂ5}s��z�߈���ٮ>H���|h��� �� m��,��3�~��|7� ��?ᇼ-cs�*�N���N�}�;�1�g�u�oE��h-+V�����/���o�H�a>�8{��� h���'|����:�����b���$��� �[�x��k��x��i��%�ï�>���Z� �$~���Y���cO]iu���t�� w��R?���	5�w�7��GI� ���_����#�O��7�*���'��\����6񟅵_�������>.��Ļ	|W;�C�M9�5I`�sˢ�#���z|1� ��� �3��A� �9�����K~��F�c� �U�V����'�>=x>�� ��E��o���Ƌ��V�<y�j�h_ͳ1�鿗���u7�/ٗ�����G���(7�/��X������~��� �|=�����3�?�߁����>/���jxZ/x^�S���� ��55���UW���
y���_�����ظ��&�޽e���߰?�ž�����پ��{��� lT�`�#x�D�eכ��>|'�� g� f�6���v {W�F��
a���?l��.�{�WK�'�<_�x�����I�=ᇃ�!{�kQ�Z�<i�>Ǫj~*�u�"-WK���i6Q~�V[��+�C����?�ۻཿ�?���[�~���U�&������ ���%��:��d��������>��H�5m7P��x��{k�M1��/�����=�I� ��?�� �{���������J�����<�0����⟊�K�#�	��?	��MJS��B��G_|B�4�
�m��y4��W_�����N�����K���?����'��#�n����Y���{o�K�� �/í7��>-���h6���������'�f�n��3�\�hC[��3�˿�T�ك���Y� W�W������/���O�X� ��|A�t�����/�V�}�|<�v�g�Ǭ�Z�����U�^I�z�4�
����k���P��4�x��?�� ��� �Q~�_�?�����97���3Ѿ-C��(� čC��G��/|OԾ7���f�c�����+?h���mT������h��o�� �Z/�e�c�?��@������=�[��?��~|����W��i�3�׀�����|_��~����\��x�C�] ��fKt��)q�-�C�#�O�5�q���������/�k�
����#�p� ��|uҵ�~�� �J��|#�V�W��g]�_������7�WĖ���������t�&�h�D����6���n� x��	��2x������ iؼ7�� �E���gũt���7�Mz��t�����5_i�4��s|T��]�����"�@�4��e�W��O������_�7�C�G���"������	_�x���/|9���ϋ� �h�5���k�^]�Cᯆ��;V��=�xj�ΟU�o��F�s-��/�߀?a�sN���k����!|$��<!i� �~��g���q�>,]�J�����_ kP[�U
�u&��;_�:��|��I��Msql~���?g�'G�q� �����������߳6��K�Ԛ�u� ��/��Y�|B��Y��q���4�ԼA�i^������wyj�p�L�Ġ���X���h��������~8|kӿ`ڗ�	�>hr��O��tټ�|l?�5��<=�-.��v��E{�xO�>'��?��`#�R���/�-���x���g�>��C|3������	�?�$���$�y�)l<'���3�� i#�i_x�X���(h�}���?�e�-�?j7k���q�o�� �$�������O�� �������^3�N��|x7����� �_ľ+���◰��|%�?i���ox��5�?����X�t��uv'������ �R�1���  �5���w���� ������%��7�����x�#���� �ϫ��|�t�?^�$����W���A,-c�4��� �T?d��$N���t��I��to�;W�|y������'���]��� ��<������_��2����%Z|ԡ�~j�	�s��]�z_�GS6�����
|-���j��	����_�,�����?d/���U�|^�~|?�O��ĲG�����C��wz�1���6��� &�}j<I�i:�|<mn��[�/����>j��O�w�
3���H��~$꿳_�||���u���~||�תx�F�c��4�<�_�j7x��[�M{�mm䯵����no��g���>#|��e��$E�����;��?��� ��i����;k;Q���7������%ί� ��?�&�{k�T�� ��~�_�S��G�oM� ��K�@�;���?a� گºG��'Û���!��e�x��Tק�5�f��>��S��ȯ&�I=#�V�ѣ�q��� e��'O��O�u�:�'�y{� (�� ao������ o?�G���7�W�Ɲ:]K�/�����x_T����]���Mծ����o�]���KS���K��l~>|p�~;~�ߴ?���;�����g����?h��~̺����M~�?�Q٢)_L��?w�9��]ø�.���m��$��+��޿m?�'���|^�s�b|s��	�� )���O���_����I�J��jC퍏�~%|"����V��{���g���}U��ӵ�R�_*Y �����| ����� ૟�X��߳o�?�:ƕ�N~̺���k~񖟦i�_�<7�x��^�e����[����{k� �ŧئ�^�[}A����	�� �� �K~�� � l_������o�u��*�������������?�c�4�z��<o��g�|3�}#V��zཋ�V��t�6��Om�����_�?��þ8���?៊� ��Vo�m��z���~"x�G�S�g��5�G���/ŋ�_�v�G�;�)��W�I�����Z�r���_�&��M�[�
���ϓ�
��6�~�]� =��  O��O�z�/�o|K����o���,�?�i�r�C�?�>闩����O��ٯ�E$ ����O���� ��~��|~!Ѿ)�� � �>|:�G�O��>0\���C�B�>!Z���<'?�?ho
*_j�ǆ�ld��/uO
ܼs�O�~Z��?�S����o�$��>���/�}C�� �/���#�]����m��|%�����?��W?��i�����$��)�ϊ�L�T�U�� 2�� ��
w� ����o�_��� �w����<7�߅� �o��g��� >#���Ӽ%��'��i���\�q�k�~���i�F�7��C�\��w�M��k��� �I�џ�ց�/�?�G���o�� |��_�J�C��?eߌ� 񮉥'���/�u�a�2?x���wv�~;�Zd�x���_�fB�@��d���_���C�A�׀���?�߲����h�����N�¯��7�υ>#?�1z��k��z׍u��D���XB���Lt��?���%� A��?࢚��g����5����?�м�kz_�G��0|,�_�C^�Ia/ýv�OZx���M���Q����ۛ�[�f-/[�O�!���o�_�P��C�?����_�gǯط�w���!�/H��u�o|d�����������ϡ|E�K� ��/�{;X��:��sFE~�|q��i��c���?�P���_�C�O�� �	��W��h�d�����?�b��.ݵ]w����~"��ߊ��H�+Tִɵ�4��P���S��ٳ����K����]G���3�r�k�o|���U���_|L� �xt�������|���D+{�'F�kIu;�"���W���s�~��|q�<y�o�z��� �����o?�s⿄����� �=u� ˥��J�w�/�_k��[��W��g�+?	#G�O���o�u��{;vO�~+�_~)� �F��/� �9� m/�N����-x���� �g���)�g����]^��u�^"��S�V����k[�WNҠh�A��+V��1������h� �o� �ߵ��O�k�9��_�R��g���_��� ��� e���?f=�?����}2���~/��~$����o�I���> �~�<:%ԑ� }q{�%~��P���� ���L�7|T��#�Y�~�w��+�<Q���?��σ!�5&��m ��s����������K�%�<7�?����̋��3�C� ����b�_�=�K�ߴ�i�N�^� ��|b��=c���[�l�u�z���j���?�~�j����kʚ���B�2AQ��˯��k߀_�rǉ,l����]��p��/���x+�^!�u�H��������#I�'����Ǉ�xw��־5��������Ě��s���S���3�~,~ſ�������/�7㶇k���f��~0|3�|4��Cᯇ�4�mf�|]���o���>��^x�PmkK�t�~�'��������"���,~!|4��>~ڟ���(���S�������&{y�?/����3kouo�?��V~�]]F�Ny�)p���?�U�3�	��%����8�A���#���:�?�O�^>��=�,�����\���/��OēE῍vvZ�-�,\�ĝ:���[��Q�� �/�/�2��?�����������������|_�/i� �|V�~x?��>:�CO�g�mK��Y�t�!��4�/2�N��h�x�˸�R��_J�<�������N� ����� i� ����X��� ��i���o��?�ŏ���Y�O���k?t����Y/�f�;��ip�6���h�����jZ=� >����%�� �@|w�9���� ���@���� ����� �����Ϫ��j��ǁ������U��(���߈~j�7�� ��3����²O��O�� �'�~ߟ�U�
|w��1'���3j߱� Ǐ�7�>|��}���o�K�Ƈ�����ǈ>C�*��k~,��>'� ��)���&�nce��z�o�w�E��?�Zo������g��:쇤�ğ�O��<�|>���=fO؇�j��s����~j�����_��K��糆� G�y=��<����>YJ� ���_�����?`}��L���!�O�ſ����!�B������_>��g�� ��ڇT����r�W��h���D��.�-KR����^��[(�`�
��$� �K�_�j?�W�����|��m|(���Y>|<��]����`���Rh���t�f:͵�,�u�$�%�Ko'�h��i�Zx�g� ���?���'���{��%�c�h�<��h��3��<S�[|�'wu�3�?�� ��?����z� �-.l.|7��w;ud�^F�@��?`��w���+���h��?�U?�� �w�G����� �_ů�� �.��x��@�g�S�^��>Ѵ����_�4-.�i�{4zm�Or������6���~��?��oM��� �'���o��O���������_�;|%�a��Q��'|�O�|G�ҼK�?�3�C6���:u߅uMU��^�)\�� � �~�G��t_���]/ڇ���o�?e�xG�,�|�O�D��&����O���8|>��!���:ֳ�5=-�=s��y-��������<��_�H�C��� ��~��� l/�$����b�e������Y[�-��ǂ�2���xF�{ϊ~n�me�� �����O�3a#7
?v?��ߵ�3�;��^0��l�߲��������3�r���l?xI����ڞ%��|;�_x7Ƴ��/>"�>8�4|*i�a�-K÷���Z	��Mk�	�� �����Ɵ�P�;�
a�迴l^5m7�j� ��~�Z_��^��~;M*�?���^��jmks�|o�,GPzW�����[��`����������>(���U=;�����l���~)i�ς?����t[ස�3�Ʒ1|!�,0�I����x���8�Լm�_�ګK~c�� @�� ����`��?k� �{�
��+\~�?f_�� �!��J���?f����X�l��)��_�{��O�<a���>����MKi!���St�+��~%��?��� �� ��k�	��_؟�
� �����6��7Ŀ�?����O��KQ�>�'��_��Ż�/�&��� �>(���6���i�Z�wZi5]�O��G�/� ��| ���Q������5��G�� �?����?t�~$�Cw����bӼ�����������x<?��v��{_��o�X�8㸠��	5�� �������� o_ھ����k]7�:�<��؇��[���O|�u�7U�/�k�>��F��_�$�����[����E3����z|� ��� �<t������� ���à[��W_�f�?l��� �t���Q��&�_�5�f};W�|�����K���[��mKJ�!i������P� �����~?|� ��~��W�~5~�~������_���'��㟇^~��>8�t{�c�ǃn��ӵ������iw�z-��_�/�����e� %�k�A�n��s���m� ���σ���ߴ����=~�����k�����W��N��o����o�o�~)�<w�m;G�/���o�]:4謯4�p�?������ ���W�����_�S����v?������ c�WR�7�R_�����v��x�Q�F����y��q/��4��]�CM���^?c���Y_ط���5��|�$x���a�_��ğ�,G��h���v���u��m/�B��=�n��W� Ѵ��������_��Տ�����q��`~�� �N���o�? ��<s���-c⯄�~3X~��!�W�.����6V~�� ���!����<Y��{����ׯ��u��-5l������
W&���1�^0���T� ��5�ڟ�g�?�pn�u���� Y�f��� ~�r�m������[x��t� ���4���|R���1}'S�&���y�~�^� ��|,��^ ��t��f�+����������e�� a������W���+�R��:���_↎|-�O�Z��x����r��A��ÖsY�/�*���#�gx�Ŀ����t�?�|�{�h���o��?��~��F�t��P���߈�<E�_x����v�?�<Co��C�?��p����~ɿ�q������3�~��������<|:��%O���\��>?|[������������I�|�jZω�m�$ӵ[cu��kH�/}c�_������N� �G��b���������� lK{����O����_�j|��to��u�#���^0��|1�_h��1��׃n���x�WX�����X� �/���A���� ����j�;�����3�g��� ٻ���u�/�>��� �C�}����� ��ּ}��]�<��X���_�<]}�|>��.,ƅ�ZE*�� ������ ?g/�� ������O�K��kK���|M��U��=�  O�'F�?�t�C�U�>#�����]+O�!�?�m"�
��R���W�����0� �� �W��� �?��|Z��<���|�n�g��oß�|"}>i�<N�&��w��F��=:o�x^]]���"�"O?���/�SN� ������ ���������^�o�|y���Qay��'��?|]�����
����[����b|4�K4�ioi/�xOΉ<_,��t���%'�'� ԟ�P�W�/��M��ܾ������I��T��� �� f� �E.u��Z��?�6MN-`x+T�W{���__|pOx?S����m�{�ڇ��P��~� �p~�?�k?�o��Ŀ �D� �`�g�i>4���=�#��4z͗���%���~,����^�����O���w��G�5?x��5�� �~��������A|(� �b|��� ����{��⿋��g_������_5O���V�.��[��<=sc�O����P�|s�k>0�f�^�gs����ϋ?e��w�����a~͟?༞���/�o�/���� �[�x��O���?�)�8�7��9���Cſ���~#�7��o�^���G���l4�ǭ��3��W�w�
�Z��_���xk�	���ྒྷ�~�^�����?�7�+�>>Hd�g��9e��[Ş��5�b;m[��U��mi��Cn|9=Ͳ	?��߰���$�u�~�_���]�����Ꮐ�����㷋?i�ڎ��
�xb� �G����&��/����K���?|K�~�
�X��S��En�7�����V��h��>xS��g���� 	�{_���L�xxV�֮5ߎ�u�Vz7�h����/yyj� 
�g�Y����归��.&�$oͿx����� h��c�ǿ���������ko~Ϳ5=ǿ���6�sxf+�<?�&�k�Zn������"�4O�(�?�m�{���Ӫ^a��� �l�~�>~�>0� �q�#��� 5��nO��#x��/��߆�/�dk��$�5��"�~8�=�j>G��:f���-�_�4�Ւ[�;I�n�>#�/�'�A�d�u�����Z��W�����~�R|����`�~�>;���� ��𗈿g� ���(���i�?[��?��k�ſG�hCH�-�Ϗ�Bu�E�`�;�J�w�<C� ���~ |V���'� k�#�7��s��$� �~k_ा���V��Ŧ�{�G��u��/[��+MGJ��I��෈<s�G��{<7C� ���@f/~�?�?�o��ǈ��qo��|7������O�߿#�ye/���(ܚ��� �|e�kھ��,�������~���5�����ƟcO���O�;�� ��� �	� ����-_G�������|��\���D��>G��?Z�tx�m'������L� ��-��9x��Q� ��~�>3���s�?�U��[��ҿ���'������~ٿ�i��c���7~����Wo����g�C�}���~�S�e���V	l��������i�_��� w��������΃c���Z�������i⟉��8𜚏��_�K��2�W/cg,�xOZ�W�������~� ���/�S�(� �������� �/غ��|��'��o�<���_��K���B�����x�M����^���+��<A�s�Rkz�zg�/:�Xm�
X����?�����d/��>8� �,|�+�;��o�� �6x�ǿ?m� ���	6�㿅����yi��#�_�,�f�+�	�ڔ,[�.��K,�~����*O��d�?o��'������
��d�c��_�������=kK��o���> ��<Q�/�.f��O/�߈�. ��> ���t�+{��|� ���>|N��to��I��� ����?�W��������~��~��z��N�<I���>3�-�	����ݮ���C�:-Ή��g]C��:�����a/�%�ω��������;�4�ݞ���<��Q\�˚������ߴ��I�[�G����w�O������CT���u�'�o4�P����H�� -��?g/�w����ǟ�/�O�� ?l��k�?�|�Yx{�'��e�|]o�-�_��[��� �W⎗z.�g��z]�γ��jױMkm9�3�� �_�������'�� ��o�|,��=�����
�� �Pߴo�'����m<W�PՖ?��~0����"�����x�§�^)�Hڢ=p_n��'��� ���jώ� <c�;���]�_|2ҼA�7��>"�_�>���െ��)���[ ���'𔗺o��a��֬��@E~r蟷��� '���O�� �@oدY���k����!�|]�_�k��	��i��ğ��xcF�x[�������S��Ѵ;A-���H�� �"?��'���?����h��_��3��K��~�����"���d�~��=�5�OH��uS�����7|C���� ��&�X�q��O�;i$� �_���G�,���� l/���	�������<i�5o��(��$�s�;�Y���Ui�&�>%i�z~�����BеgJѼ_�?��U�ɴ����^�7��f� �*x�������V/�z���K����a�N� �o��Z�o�c��s|0�t� ���e�ƻMI|U�Ǥ|+����WDwh�lG��DV0���~���
� �� ��x7�g>��|_�A��W���ֿ<e�x3������_����O���m�O�_�A�|�kķV�x_K��/,�n��߆� �p��_�D?e?|E�7�_��$�i�S�� ?i�?�ޝ�|s��~|7�����c����_�~�U���:&�Cmy�O��t�7=��Wß�(�� �� ����?� a�ك��=ꟷ�|Q���C���~�0��� �q��{H��6�z���i3��߄t�Ji���&��̶�ey� �� ��Se� >������|� ���:>3~�� ����j�C?�b	�cÞ$�����L𖑪˭Y��T�8Kȍ�����@� ��� �[����~� �H�o����	�>$�+�ςl��������<+����TռC�Z��	o�&�+o�O���qy;�j� �z� �,��� ?��~.��~|u�A�T~�� �/쉯� �84�|R�� '�>�� �t|^�7���6.����^��>x��Lѭ>kW^�Ǉ��B{�*k٠��� ��~���K��)��}k�ZxK㯅�+� �;x{�	��N]'�u��&���������K��~_�Ԥ�<5�"��v�Ѕ|�6"d�� �f�#�
A�)��7���l��`o�-w��_�o�4�E�i�~˿�����0��Z]���J�|=��=Ð� k���$�Aƨ�I� 4� �����Q��̾4��� c�x�������]��?���>"�W�a�-k�^!�� �x�'�,lmu?ٷ�^��=FM_����f�H�t.w� �W���g� �B|]� F� �'|w�oW�'��Q�➍�b����U�o�l���x�Ŗ?
�_�j�?fMO�P�zo�<fuK�v5-:�ReYG�_�_���
��Oڷ⏋>5xLѼM{�I|7��}�k�&��)���_���]O[�,�u���P���.S¶�~.B�Z���-B��_���\��?u|+� s� �_j��o��W�*���g����1�ُ�����3�V�ៃ�o�<�Z^��/����'�^$��-��R3Ħ��
���%/��������/m_�����q�;�Y�ۤM�o�m��φ?�/���j�6�]��0x�
��Y���I�G��5���e�}��џ�*�a���?�+��M�k�
�������,x�|k�)��X�?g�/���Z�__�~��hZ������#�i�UC�xδ�+�����?��?����'��� ���ڟ�P?����ֿg�G�?go|8���#i���~4��c�/��]J�� �>�ן
��� ���_h�n�u��&���ٿ���� ��ۤ|B���w�[����e������ �~�7������Z���#�����Z���_�S�|A�ŭ���^�6��0��f�?,?e?؇�?�/�� hMW�)�q�D��'�c�"j��Zv��w����1y���۲|}:����(?�/	k>'��Q�&Q��i�?�<ٵ$r��� ����;ڛ���<����g�����k^5��� o*_�;�Λ�῁c�� ��o�{��w�~ |PӚO�Қd��q��R�6pJ��7������>x���F��+G����⏃����\��|{���>0|3�O�h��C��(���<g�oO����;�^���wi�.��j6�C��h<��V� ��~տ>�ҿ?k�g���� mO�{����?<C�������>)x¾�%}�w�>
�U�����xz��>�^��Z�/����o3��g��%G�_���_�/���߰_���o|6ѼM��/�Z�ݢ�\������\�����J��Ѧ�:��ْ5��ɨ�_X�xB�m��?�����hO�ο����&W�k��y��������_�^�7�O�o�>+��>[x#�
j�	|��v?�[=��Jm���E^��o��� i��(��;��� �7�'��a�r�>����;M�~��7~���-7��.��\޸��B�����DB�ǖ6�]��Th��G�	/�*x��"��i��W�?��gOҾ&|_��b��;�����߀�|Si���}���)f���o����sil�����y'�YU�����K��5�ڏ�j���	���&���������7Ư��m�ڷ셭x�D��� k��vMU4����G�"�/x��iK5մ_^��H��`�o���
	�_���W�>�6�x������+ğ�g�|_�^�+����i��@�|9�����^�ſ�I�3_����̶V>$���!���CzW�� g�I�O�������%��~~�_�ms�|�������޹�O��������5�J|^�<y�n�N�|#�vO�Z��(𽾡��?5�
�öE�ç���� ���?����K����~|:���� ��/����^|I��|e�xk�0�KĖ���z� �~2iB/隅�mcS������NhaX�}� ��
�W���������h���?
/~
�,n� k�o�����|Ws�� �6�����_���;�=|�+�~=�^x�F�o����EYn��@>^��n��o������o�:~�� o� �zE����׏�a� 	� ��~��?�W�]k�� �|E��ş��ߴ�����P�ģ��h��Z|Z^�u�[��������� �����&�%���9� �b�j�x{���u�ώ�׭u�	|-�񇅮5x�=�m���&��^���T�,���!F�����ߴG�1y�o�9�/���_����ֱ�� m��֑�]�O�O�w6:�������[x��f���+��2���«gx�\:� ������	��� �c�����~ϟt��?�?����O���g�};�a�ܟ
|A����~$x���*�v��+�j^ �m5��x��̈́_ok�U���x �N��?ao�k�	�����j��C�Q��� �� �!����_������ԼC�� �����;�x3V�����Y����h��ܷ��J�K� ��_$��?g�� � i��Ӻ'���� �H	�M�����?hO|=_�������ְ��i�M��?��S�W��e o����a��_~�?b�ڣV����_��u�[M�>h��U�~�~9[��F��.mu���w��������L^im���� �� �J��_�E/�(��⯈�V��7�/�E���� 
e��>x�#��_��<g����_�=���x��'�>h����w��³�5!ӵin�p�Ė?�R��M��?����?ǟ� �:<}c�|v� ��|b����Ï��� |1��1�ǿ��F�߂f��F�����̑xsZoɩ�.�H�<#���%�y������/���� �$~ϟ
� k?�~;��>.���>>�|u��a�h�z��Mo�ߌ�-�����>�ѡ_x�<1���������a�i�����$W�~��,��?i��/?�iMO������~ǿ���c㟀4����}�~4_�C�r�%�:f�� <��_�8�A��⯉~5ܿ���U���w�յϲ5���{�i����?�Y� ��{��+/�������׋��
�'� �}/?f�e]������g�I<3�Y|[��$����g5��ך� ��пෟ�V/�/�
��S�k�G�?�G<�߉~3����_���Fԯ|S�x_�X�_�us��kx�w��V�i.�J�?�
I� �� Ƹ�/�P� ��� �
f�W?���t�����?l�[�~$��sg�i�/���iz]Ϗ�}J�ZK�k��״�2p�]�ڝ�}s������
!�~�_?f[ٓ����� Q��>|��������-�O×���?d��W��=�Ǎ��ǈ�m^�h//o��ec^��� �_�>��OٻO� ���g��� ��?� gϊ��߈���8xz���>2��s��f��9�o6�⸼=�� �/��\_����q�O~��	eo�%��S��+�_�S�� �V�o������?���_�9�
xo�w�K�������A���%���kP�T�o�)ejZt�*���q][�ᇂ� �:�f|P��<]� �� ��~ݟ~5|����/?�?���)ki����ŏ�̟�,^-�>^��*!��~��|#�m�];�����o}~�t�N>��P���� �g�?෾.�}� ����/�:�>��[���I��~%�S�>���l.|/�D�	y��ɨ=�惦�d������6�h��|Y�0�k�M���
��8� �������I����^�'��/�� �@[�������$5���:Χ������ڟ�˻�g�#✞)��W:]����h�>�����t� �H�\���k���
��b�#]�֫� :��G��ƞ&�� �5𭎇�<ٷÍ[Z��oI��M�t��(j�lz���:U��?1>~ٿ�L_�g�?��3~�?�L ~Ǟ�����W^$־����Ua�F�;ƚ�ώ�}'�2|<ӵ�O����{�+=R�Tӵ{��;{�9m׭� �!� ��<��?� e� ڗ������_�"���I���{��>o�'�>����߈�7�� �o������<I������`?V=����/2��~?� �h?d�/�k�)� �{��zO�����k�#�_�w���R�Cx���k���gN��,�%ߌMֹ�3NY�7�-���� p	����A�0|]� �W|i����� ���<-�h����|q��
��G��m�W���S�$-�3●|Qyu�xz�Ꮕ��u(���f��9��+�'��W����_?j�����S㟂�e�����s�6�?�ڷ�_~�?���c㯇�?��.��^����g��ռB�,��ǋ�[�}/���4Q��w���
�$|���/���ҿ���o��߳��ۋ����ۗX��x��ox�u�#����o�ckq�-� ������� Ŗ�o�J�7���C� j��+���8� �~�k�d��5��%O�?����C�ҷ?|�j��)�Oo�_�-K�X𯀴���:����o��x�ƺ��5�x{Aҵ�H[R�ƿm�߰6��A������ j��%����\~��'��� �/�� ����w�_�֘k� 5F��Ay������gX�A`l��t亚c����(� l_�$�������� ����c��0�� c	��� ����hT������|���3��</e�/h:�WU��Fg>#K��u&��_�3�����j_�s�
����������'���7�?�~��/��?���'��)t١�?���+t��!$;_Jt��m��A?�^��?h�� ���b�s����� f���� �x��ǎ�i�bx�>������'�g����M�}�5��6��+SӃϭ[^^��ӡ��z��G� g������_ؗ��� �Z�����`����_�Z��/�}�i�;�&�O��FO|3�2�?���k�$�
+�/�驥R�ҿ/?����E�������j_������� ��k���>|6���>�Y��~+K���Ěv����'��ĭ� �Zi��g�[]�4oy��%/5	f���}� ��� ��� � ��|pѿi�������������)��c�+O��k���<��+}�q��B�<��<}m�ˤY�x�MR����Y|����~<~Ǟ�9�,�2� ���~ x����~*��߶E���]k�>���Kҵ�� վ�N����sf�^x����� ��:5�܋}�Co �������?m/�� >$�x��w���3Z�~�Z¿����?��f_��bj�|�O|W�ץ�I�!�L��m_�>/�Y�/<���[�_�I7�3�U� ��?ঞ���L�/�}�����M����h��:�� �
�5����:o���M�_�_��\��!��G��h^-�5U���_�{�?�
�s� t�_��㯆:��O�����)�_���	�_�� l>h>,�l5��C���SD�1��\x^�]P��կӌ��_��3�j�3�G�q�R�4>*|e�7��|%��|	��㖟����k����8ֿf�>?	jZn�����]����z�����x�)4��� <o����$7������� �,��3���
e��۟�?�7?�E�^�ߵ���/�=���[�;X�+���گ�뿌z7����|V���������������|t��<� ����;���*^� �J<=�Y~������� ~��#�������m����!�Y�xu&���ῆ�~ҭ����iw�V�[��%7�����O��� ���� � �d|N0��~��>�`���o~�?�O�(���_|yԼY}��U��O�:n���^������5�Y���K�V�F�ߍ�7���	���?c��)��G�~:~�|]'����j��x����'�n��x�I<1�|<�/t� 
��໛���E�ԯ��>l������ş�*��3�/���!ߌ��[�q����=�_�T��
�� jz'ï�� -/����4�n��R�,>]�:��6�V���^:�)�L��ʊ<�����>���#���ϊ?����9x�n�������/�������/�	i/��.��8�K�όڕ��u�į\k�����\�լ�r�M�j� �ğg���
|� ����?���T�e៊� �ω�f?x6]����3_��2��Z��^��Q�˥�7���t�m��Ipw> � �?|g�+� {��kIt�~,�� ����O]~۟��:&���6�?i��u�?����5o�Xx:	�>¶��~��#�b��<3Nd������������/������
~�'��4���	G�?�^)��������k� �I�������z��Y/|c�}��_�MB��/���
k-.���߃�uO�?�C���-��?k�?�	A�!x���|���O��~���G��?j�c�_�E�>i�_� f�(|F�м;�_����u�K�x~�ſ�_��MO�S���~ҟ�R��/����߁��χe/�/�ݏ�m�~��_�ǅ�.�~"�g�5y�1���6��'G�<O��O�I�ig�$���YG�G���%�Ŀ�mG���!�?��^����N������Z���|P���-��������T����\�	��w_u��5�� ��B��B�
�n���}�gi߱_�3ß��_����I�|�Ğ$�_�;�s����P���>2�h<E��W��ɼs�~�~�6~1�o�M���|1OIoc���Οo�v� ���Y��W� `o�����'�� ���_�� �2?f_�P����j� ⧍�_�S�"������x�S�����T(Y<i���LL4�C$�d�?
� fO����#~�?	?��� � `_~�> ���~�_���?�����?g��W��Y��⟉�-J]S�~��KmC�����/�[O]x�N�tX���#A�?����V/�����/ǯ�'摬~��?�W�{τ���Þ
�����L�l�׏�F�k�Q�@|3��2�k��o����[�zn�m���Mgb��x�������R� �p|,���b-k�	_���,7�n<!�Nkߴ�?mk/���T��'�� 
�ǚf���I��^v�䲿��R��z
Gop~�i�<G��-��/����6�|=�|��b/�w�m5{/�g�
	����~&�G�O�'�٪Z�|:_���ǎ���T�.~�2΁�]~��t�+[�K� �bj�_�)������� �_���z�Xѿk/�z_�=O���ğ��2�P�_�4_x�x��������� ��"�u�7�l�c�Uqگ��Ii�?`���f� �K~��  ?e��[�#����O���������~�&�?�5���x��;�4=k�0�4���~�]��ŜzT���Ґ�h���>ݽ�7Xմ��Z����:6���M�꺝�6:~�el�I��.�d�{xQKI,����Z����g��㏧��W����o�m[�Z�s{���K[�tۻMOM���4]F��+{����5{B���^GŬM=��!� �����q����&SX�e��������v���su�,:��*K�4;�Ԧ���?��ie�jM�?�?`ҵH�]F�x�Nk{=R�+���&�n
+�E�joj�0܍:� ȒCgp#���kR�
�V�y��Zծ��@k����~(Ga�_x���i���㳱��iqm����#�w��MCF�^Ϫy�:Zo�����|v��5��Z��|;�s��1����K� J��ƕu�	>�u��jZT:���MBmk��)�lw�bi�ʀ{���[ᆭ��z���:���������Zk�t�z��}�z���(��!�Е��Q�'ё�X���$|s�0|?o��K���7Z��E��� 	���>�4�Ik��<�ht��.�b��MB�H��e�_�w���A��rx.����*��ɽ� �V�u�|?�|!k��<=��6V�ٍy�ZF�"��u��n�'k�C4Pk/�����kY��������4�}gF�<�>)j)��=_��mR��~��K�7����P�Cw�/���[��M絒���+?�� �j��υ�|S��jz������#���h�Z[���VFa<V�d��Q_�2�m^��ft3G�gM�w���o��>&��;Oi�X��Ŏ�gu���e�5=	��T�� ��m�M噚�[\[�d�4E�'��]�1�k�g����Z�K�:;C�ˍcC_��
iڷ�<;�h?ښ[� ���\wm�;m7U[K�����y�5��g������5?��W^-�.o<��ៀ�<I������4�
j�W�>�t_�+e��_Ɩ?���-
�Z�N��_��5��,�� ���>� �7�$�ޗ��z��O���u�G��m-�MV�G�nuk�>�i����L�t�P��+8䍮1"n��Ϗ�	�9%�/�����n`�5�JX�&v�ݖ���O"<V�ч��H�)��p�5�?�>��=7���>%���t��m��E��T����<C���MB��@�����R��ٛJ���3Kw$h�!�~�� 5]wQ����η�e�[���s���u��g�w��'�|Q{&���Y]'Ǻ՟�<%�j��^�m<-�6�o�L��j�R�	��[�j]6mf=7q�K�p]Ae5�9�����ݟ<I*.9�P��_��t���z��ދⱥ7�uU�{]U5�V�I��H���@�,3H-���r3����"/�>4��<#�/iZ���h:Ưy����<�xM�Q�MP�Ɗx��=����h�<?5�mOC�t+�u
^��~%xSJ�U�6_t/�C�?�#�~��^i�/�e�_�����w�G&�e��$�i���k=�Zn�����P?��Ϸ����Y����as���܈.u��t�2#�n�!ӯ�ia��]?L��/;E�̯o��w�,|_��~�t�_���l���R���f����Z�׃�|Wᑩ����zv�g�]x{I�߅��t�2�K����uO[���?�_�ۥ�\x�C���<K��r���Ş2ҥ��|E���O��υ�>��������=��� E�=���R�}�x�-�7m�xo�$�s���O|z��6��^�1��޼����|G���o��M�����vK[_o��M&�X���m��O�σt��㶹|�'��/��x�4x��M?���u�09^���=�  zu#?� �����\�ϧ>�袀�{� /�� ��������(���� ?��z
0=:� �� ��ӊ(��:��Ɠ'���~C�QE .��� ?�������c9�� @?1��ǀ.��� ?���E #��c����=.�O���������?����t���� ��=P��
            [firm_left_thumb_ftype] => image/png
            [firm_right_thumb] => ���� JFIF      �� <CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 100
�� C �� C��  � �" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? �ڃ�7���?��>� �T?ࠟ�����~����� ��Z��|Agie���L6��xc\�y��s��V�G�u2J�_�T���E���'g��j~���[�+'�� ~�:���c�o�to�ú���G�m/ᮔb�F��ҡ�N��������:ds���R �/�/�?�V��D� �z� c/�7�ߴ��������eO����ٷ�_MΝ�[�z&��y_��khȗ����7��+��mďl�?7|go� ���?����Q��3�8���e�ѿ�m-W�?��4ω߱��o��^�?g�z��%�\]2�M�� �u�]?������Vv�l��T����������_�S� x��
Y�f�������ثR�M���Zg�>j��Y����Z�;�_�x�G��N��O����R"���*���� ���Q�H<M� �ֿa��+���i�'���o�� �w��z���ï�`𶸾����x�Tk��~� ^�tYu�cO�.췶��+v��c� }��|i�Bx��
o� �������������d�������}⯍�4/�?�ߋ_���2[X-�{u�|Z�4� ������3h����ׅ���?jO�O�^���g'� �}~͟�`o��!�꟱���۝C�Ɠ�����^������{�/�>)�����?|��KR��V�&����y ~�~ן����/ď�%��w���_��_�c�/�����~8�c����j� �m�S���?����g�R�>8���]ZI�Oxi-�Ү�҆�E�>�?i��[���?iߋ�P��+� Ư�'��ߌ#�%��o~��0���_���O��<}�_|��x�˾#�F�u��CO���F�t�b�ta��/���I�6�>0�a��� ����|#��>'�$��������௏tKy�5�'�`�����k���[^C����SCw�����ݨ�GQ� h� ��~��;�����{T��� d������ߴ����wL���g��x�K����A�q���|a��5���~i���W�Ɲq�CS�����+��q���@�e����G��_N�?c+O�Z&��h�����l���4�� �����ui���l�Q�Z��T���U���O�|��$���� ��~�S�M�7�<~��� �7|�+�~��h/ۗ��� hό�6�w���-�� ��;o�A�|r�<&���C��x�>;��4�;|���]�0<W�?xo�w�_�'����F�s���Q~�^>��� k+ψ� 4�^��� ���k�9�կ��=�k�V�����S�3����WV���moom��lO���������� �s����}��_�/���?�A�<�U���Ӿ8x��_?g[�_�%�xN��� `��Y}kX��%�e�xK�������� ����� ��� n� ���,����~�P�>���B�>1�n��_� f�64ټa�a$����v�k�.�q-�bWeQ�w�c�oO�� �G�?� ����"|������k�4?���:�V�����~6|<�]G�&��xSD�!�њ�ؽ��f8�IG�'��?ڛG��?e����{�#�
G�0��_���n��?��>��g�0��%վ����>�;SԾ.���.<e�o��E{�x��G�N��^��xS�c����i�T���%����[�~̟�}
;_�G��� �����(..��� ��3~����kdY��D��2���� �
�� 7��l9�6|k��� ��?b� �'[֮�?a�|I�� ���'���t�f�a�j:F��ѼI<��� bmS]���kt�?s� `�:�h�I��r�Y���ߵ���=�� �q����	u� �p���.�Y���o�e��Z/�	�'�=KM�k�ڽ��$��-��>�l�� =������?�� ��h���h/�'���?���߁���H�<�/��x�Ŀ4� �v���5����Js��~�|o6��x�ܗ�#��X��	!�7�T��'�ؿ�>�W�%� ���K���^hw�3�m�/�_�#��C��۫]2⿈qi�u�v��y�e��tO�̩ T~�������Pk�� ��-����5���߳���\�W��?k��������rOi��ͺGŏj�G�twĒ���<xd�4�b�s���_�,_�7�\� �����(o��o��a�_��1�~^��/|�g����R����hv��w���L_X�]�mF�{�u��.���^��{���K� I��+��� ��D� �Y�7��?ڗ�/�u�0�ۨ~�>)��Ŷ���ˤ�l>i�Ѵ�^�鶾#��Wie5�ְ��� �|��6|.���O��oğ����{�B|+� �~���[��/�|�'�~-xW\Ҍ�F��?��ƥy�t�Ah�#ҝ�+��a���e�ٷ�?���� �� �����?o�ڇ�d�}�O��}���o��:����,���� N��@�[e"�Kx��koJ��?�� �!jW?�L?���S� ��� �I?i_��?����C�G���9w��OF�4]HZx���W:��q�iڎ��F�"�]��喩��%��޿?u���/���q�؇�����\~�^9�U� 3��?hM:��7�������x�_ռ;�B��d::�qk%���[�gF�d��^��^���h_�I/�?�)�� �I��P���K�n���g�ߌ?�׏�[�~��4� ����桦����U���q��R��/n%D��i(��� ��~�� � f߄6RxO�ğ�o�k�	�~/~ݞ��?�%|񽦿�E����2�iگ�~$X�o֮����i��k��O�d��<�p��'�	��[� �N�a� ���?l��(����#�z�c��ٚ��[��|7��g���4�/�^,�q�r;�_��M���|>�_xv�kmY�����^^W�� �|� e��;�D�� �A�$� � 4��E��4Ms����&���+|�៍n�C��?g�Y���]��y�Rkv��xF�L�F�����F��� j�{Ğ� ���E� c/�+�������'����}��E�?��� ��+��9�=5<�'���/�_�|(�z?�4��p��k�7��5�1� ]��>����W/�,5�Ư���� <w�O�-C�ox�~~߱x{�~�_x�㿄tmKZ�o�+Tմ��6���l�5�-?����S���>�+�d���&g���#��1�=�ğ��'���!���Św��/x��x���x��P�,4è�����%^�gf�H����?�?�x�V�|t�ğ�(G��� 
��J��������Ja�ޡ��	�W��O|$���]��ǌپ �X�~�� �|0n-|!|�����Ɵ�ZO�>+���#���ߵg��H[�� d_ɣ~Ϳe�M�U�<A���U�A��/�M��i�ض��^�t�D.-��]bp�����/�������~��Y�� i�տd�^�_��x~�Ze������I����k��_�ރ�X��������q.��;�� ���X�U�0� �I?���^���	i�H�����#���o��c�[������`xw�֖:� �_�u��;]"_�zƽ�xz�P����١�t�e�ex� ���s����g���Jx��A�}\|,�g���w��C��ټx�?j߇ �l�~��<\럳o���K��:\�O����,z���4��ʮߧ��d?�� �Q�_~	~�_�U�ٿ����~ۿfI?c/|Z����AӮ|!�<��1|X�W�xO��!MO�~�&��|U�x���Xhx��2�"�0�� g���z������
S�}x��:�U���׎� h� � �.�!�������V� �C�*�F�d��?j��u�EuO	����މ��?����we��^k6�U�g�߀?�%����6�� �N~�+��k���'�~����>I�$� �8�k����F������<{� 
��/�=kK�|c%�Ə�?��"������|� �������no���L���~� �4� ࣷ<+�=I�_��O������#����=�i�_�i>��� �Dgơ��W���?5WT�!'��/����?�?c~�_�x����K�t���� ��ܾ������-Mi7���2~�
Я�3����6���Y� 7�C����� ��S�݆�{�9/�-����������� �%~��8��5���|]��_|o�������?��V��i�.��M�S�wJ��񅦉�<S�\�t}"�Ἢ�~~�� �Fo�W���v���O�)o�� �_�}e��������=k�'�^�ky�|6�A�	ҧ����|H��i��ߋ|W���ዛ����:Yb?�_��S��� ��oؒ_�߲/��U��/i����)�"	~�_���^���,�~��B�e����$_x��{�Qg�� ƚU���/�m?`����_���	�e�k6��*�����5ڗ��� ���� ���?�J���/������!�?ǃ�Q���|����,��\��*�z� ����U��?�
W�e|A� ��|[�a�a�p�쭫~�_4� �"�ž4��3�~-���
�s��zB�_m>,xl�s]🆬�<a~�����v���������
5��5?c?��߃�jM?�7��������?�'�~	���#��ŏ����xt��:��so�W�ǂ5}s��z�߈���ٮ>H���|h��� �� m��,��3�~��|7� ��?ᇼ-cs�*�N���N�}�;�1�g�u�oE��h-+V�����/���o�H�a>�8{��� h���'|����:�����b���$��� �[�x��k��x��i��%�ï�>���Z� �$~���Y���cO]iu���t�� w��R?���	5�w�7��GI� ���_����#�O��7�*���'��\����6񟅵_�������>.��Ļ	|W;�C�M9�5I`�sˢ�#���z|1� ��� �3��A� �9�����K~��F�c� �U�V����'�>=x>�� ��E��o���Ƌ��V�<y�j�h_ͳ1�鿗���u7�/ٗ�����G���(7�/��X������~��� �|=�����3�?�߁����>/���jxZ/x^�S���� ��55���UW���
y���_�����ظ��&�޽e���߰?�ž�����پ��{��� lT�`�#x�D�eכ��>|'�� g� f�6���v {W�F��
a���?l��.�{�WK�'�<_�x�����I�=ᇃ�!{�kQ�Z�<i�>Ǫj~*�u�"-WK���i6Q~�V[��+�C����?�ۻཿ�?���[�~���U�&������ ���%��:��d��������>��H�5m7P��x��{k�M1��/�����=�I� ��?�� �{���������J�����<�0����⟊�K�#�	��?	��MJS��B��G_|B�4�
�m��y4��W_�����N�����K���?����'��#�n����Y���{o�K�� �/í7��>-���h6���������'�f�n��3�\�hC[��3�˿�T�ك���Y� W�W������/���O�X� ��|A�t�����/�V�}�|<�v�g�Ǭ�Z�����U�^I�z�4�
����k���P��4�x��?�� ��� �Q~�_�?�����97���3Ѿ-C��(� čC��G��/|OԾ7���f�c�����+?h���mT������h��o�� �Z/�e�c�?��@������=�[��?��~|����W��i�3�׀�����|_��~����\��x�C�] ��fKt��)q�-�C�#�O�5�q���������/�k�
����#�p� ��|uҵ�~�� �J��|#�V�W��g]�_������7�WĖ���������t�&�h�D����6���n� x��	��2x������ iؼ7�� �E���gũt���7�Mz��t�����5_i�4��s|T��]�����"�@�4��e�W��O������_�7�C�G���"������	_�x���/|9���ϋ� �h�5���k�^]�Cᯆ��;V��=�xj�ΟU�o��F�s-��/�߀?a�sN���k����!|$��<!i� �~��g���q�>,]�J�����_ kP[�U
�u&��;_�:��|��I��Msql~���?g�'G�q� �����������߳6��K�Ԛ�u� ��/��Y�|B��Y��q���4�ԼA�i^������wyj�p�L�Ġ���X���h��������~8|kӿ`ڗ�	�>hr��O��tټ�|l?�5��<=�-.��v��E{�xO�>'��?��`#�R���/�-���x���g�>��C|3������	�?�$���$�y�)l<'���3�� i#�i_x�X���(h�}���?�e�-�?j7k���q�o�� �$�������O�� �������^3�N��|x7����� �_ľ+���◰��|%�?i���ox��5�?����X�t��uv'������ �R�1���  �5���w���� ������%��7�����x�#���� �ϫ��|�t�?^�$����W���A,-c�4��� �T?d��$N���t��I��to�;W�|y������'���]��� ��<������_��2����%Z|ԡ�~j�	�s��]�z_�GS6�����
|-���j��	����_�,�����?d/���U�|^�~|?�O��ĲG�����C��wz�1���6��� &�}j<I�i:�|<mn��[�/����>j��O�w�
3���H��~$꿳_�||���u���~||�תx�F�c��4�<�_�j7x��[�M{�mm䯵����no��g���>#|��e��$E�����;��?��� ��i����;k;Q���7������%ί� ��?�&�{k�T�� ��~�_�S��G�oM� ��K�@�;���?a� گºG��'Û���!��e�x��Tק�5�f��>��S��ȯ&�I=#�V�ѣ�q��� e��'O��O�u�:�'�y{� (�� ao������ o?�G���7�W�Ɲ:]K�/�����x_T����]���Mծ����o�]���KS���K��l~>|p�~;~�ߴ?���;�����g����?h��~̺����M~�?�Q٢)_L��?w�9��]ø�.���m��$��+��޿m?�'���|^�s�b|s��	�� )���O���_����I�J��jC퍏�~%|"����V��{���g���}U��ӵ�R�_*Y �����| ����� ૟�X��߳o�?�:ƕ�N~̺���k~񖟦i�_�<7�x��^�e����[����{k� �ŧئ�^�[}A����	�� �� �K~�� � l_������o�u��*�������������?�c�4�z��<o��g�|3�}#V��zཋ�V��t�6��Om�����_�?��þ8���?៊� ��Vo�m��z���~"x�G�S�g��5�G���/ŋ�_�v�G�;�)��W�I�����Z�r���_�&��M�[�
���ϓ�
��6�~�]� =��  O��O�z�/�o|K����o���,�?�i�r�C�?�>闩����O��ٯ�E$ ����O���� ��~��|~!Ѿ)�� � �>|:�G�O��>0\���C�B�>!Z���<'?�?ho
*_j�ǆ�ld��/uO
ܼs�O�~Z��?�S����o�$��>���/�}C�� �/���#�]����m��|%�����?��W?��i�����$��)�ϊ�L�T�U�� 2�� ��
w� ����o�_��� �w����<7�߅� �o��g��� >#���Ӽ%��'��i���\�q�k�~���i�F�7��C�\��w�M��k��� �I�џ�ց�/�?�G���o�� |��_�J�C��?eߌ� 񮉥'���/�u�a�2?x���wv�~;�Zd�x���_�fB�@��d���_���C�A�׀���?�߲����h�����N�¯��7�υ>#?�1z��k��z׍u��D���XB���Lt��?���%� A��?࢚��g����5����?�м�kz_�G��0|,�_�C^�Ia/ýv�OZx���M���Q����ۛ�[�f-/[�O�!���o�_�P��C�?����_�gǯط�w���!�/H��u�o|d�����������ϡ|E�K� ��/�{;X��:��sFE~�|q��i��c���?�P���_�C�O�� �	��W��h�d�����?�b��.ݵ]w����~"��ߊ��H�+Tִɵ�4��P���S��ٳ����K����]G���3�r�k�o|���U���_|L� �xt�������|���D+{�'F�kIu;�"���W���s�~��|q�<y�o�z��� �����o?�s⿄����� �=u� ˥��J�w�/�_k��[��W��g�+?	#G�O���o�u��{;vO�~+�_~)� �F��/� �9� m/�N����-x���� �g���)�g����]^��u�^"��S�V����k[�WNҠh�A��+V��1������h� �o� �ߵ��O�k�9��_�R��g���_��� ��� e���?f=�?����}2���~/��~$����o�I���> �~�<:%ԑ� }q{�%~��P���� ���L�7|T��#�Y�~�w��+�<Q���?��σ!�5&��m ��s����������K�%�<7�?����̋��3�C� ����b�_�=�K�ߴ�i�N�^� ��|b��=c���[�l�u�z���j���?�~�j����kʚ���B�2AQ��˯��k߀_�rǉ,l����]��p��/���x+�^!�u�H��������#I�'����Ǉ�xw��־5��������Ě��s���S���3�~,~ſ�������/�7㶇k���f��~0|3�|4��Cᯇ�4�mf�|]���o���>��^x�PmkK�t�~�'��������"���,~!|4��>~ڟ���(���S�������&{y�?/����3kouo�?��V~�]]F�Ny�)p���?�U�3�	��%����8�A���#���:�?�O�^>��=�,�����\���/��OēE῍vvZ�-�,\�ĝ:���[��Q�� �/�/�2��?�����������������|_�/i� �|V�~x?��>:�CO�g�mK��Y�t�!��4�/2�N��h�x�˸�R��_J�<�������N� ����� i� ����X��� ��i���o��?�ŏ���Y�O���k?t����Y/�f�;��ip�6���h�����jZ=� >����%�� �@|w�9���� ���@���� ����� �����Ϫ��j��ǁ������U��(���߈~j�7�� ��3����²O��O�� �'�~ߟ�U�
|w��1'���3j߱� Ǐ�7�>|��}���o�K�Ƈ�����ǈ>C�*��k~,��>'� ��)���&�nce��z�o�w�E��?�Zo������g��:쇤�ğ�O��<�|>���=fO؇�j��s����~j�����_��K��糆� G�y=��<����>YJ� ���_�����?`}��L���!�O�ſ����!�B������_>��g�� ��ڇT����r�W��h���D��.�-KR����^��[(�`�
��$� �K�_�j?�W�����|��m|(���Y>|<��]����`���Rh���t�f:͵�,�u�$�%�Ko'�h��i�Zx�g� ���?���'���{��%�c�h�<��h��3��<S�[|�'wu�3�?�� ��?����z� �-.l.|7��w;ud�^F�@��?`��w���+���h��?�U?�� �w�G����� �_ů�� �.��x��@�g�S�^��>Ѵ����_�4-.�i�{4zm�Or������6���~��?��oM��� �'���o��O���������_�;|%�a��Q��'|�O�|G�ҼK�?�3�C6���:u߅uMU��^�)\�� � �~�G��t_���]/ڇ���o�?e�xG�,�|�O�D��&����O���8|>��!���:ֳ�5=-�=s��y-��������<��_�H�C��� ��~��� l/�$����b�e������Y[�-��ǂ�2���xF�{ϊ~n�me�� �����O�3a#7
?v?��ߵ�3�;��^0��l�߲��������3�r���l?xI����ڞ%��|;�_x7Ƴ��/>"�>8�4|*i�a�-K÷���Z	��Mk�	�� �����Ɵ�P�;�
a�迴l^5m7�j� ��~�Z_��^��~;M*�?���^��jmks�|o�,GPzW�����[��`����������>(���U=;�����l���~)i�ς?����t[ස�3�Ʒ1|!�,0�I����x���8�Լm�_�ګK~c�� @�� ����`��?k� �{�
��+\~�?f_�� �!��J���?f����X�l��)��_�{��O�<a���>����MKi!���St�+��~%��?��� �� ��k�	��_؟�
� �����6��7Ŀ�?����O��KQ�>�'��_��Ż�/�&��� �>(���6���i�Z�wZi5]�O��G�/� ��| ���Q������5��G�� �?����?t�~$�Cw����bӼ�����������x<?��v��{_��o�X�8㸠��	5�� �������� o_ھ����k]7�:�<��؇��[���O|�u�7U�/�k�>��F��_�$�����[����E3����z|� ��� �<t������� ���à[��W_�f�?l��� �t���Q��&�_�5�f};W�|�����K���[��mKJ�!i������P� �����~?|� ��~��W�~5~�~������_���'��㟇^~��>8�t{�c�ǃn��ӵ������iw�z-��_�/�����e� %�k�A�n��s���m� ���σ���ߴ����=~�����k�����W��N��o����o�o�~)�<w�m;G�/���o�]:4謯4�p�?������ ���W�����_�S����v?������ c�WR�7�R_�����v��x�Q�F����y��q/��4��]�CM���^?c���Y_ط���5��|�$x���a�_��ğ�,G��h���v���u��m/�B��=�n��W� Ѵ��������_��Տ�����q��`~�� �N���o�? ��<s���-c⯄�~3X~��!�W�.����6V~�� ���!����<Y��{����ׯ��u��-5l������
W&���1�^0���T� ��5�ڟ�g�?�pn�u���� Y�f��� ~�r�m������[x��t� ���4���|R���1}'S�&���y�~�^� ��|,��^ ��t��f�+����������e�� a������W���+�R��:���_↎|-�O�Z��x����r��A��ÖsY�/�*���#�gx�Ŀ����t�?�|�{�h���o��?��~��F�t��P���߈�<E�_x����v�?�<Co��C�?��p����~ɿ�q������3�~��������<|:��%O���\��>?|[������������I�|�jZω�m�$ӵ[cu��kH�/}c�_������N� �G��b���������� lK{����O����_�j|��to��u�#���^0��|1�_h��1��׃n���x�WX�����X� �/���A���� ����j�;�����3�g��� ٻ���u�/�>��� �C�}����� ��ּ}��]�<��X���_�<]}�|>��.,ƅ�ZE*�� ������ ?g/�� ������O�K��kK���|M��U��=�  O�'F�?�t�C�U�>#�����]+O�!�?�m"�
��R���W�����0� �� �W��� �?��|Z��<���|�n�g��oß�|"}>i�<N�&��w��F��=:o�x^]]���"�"O?���/�SN� ������ ���������^�o�|y���Qay��'��?|]�����
����[����b|4�K4�ioi/�xOΉ<_,��t���%'�'� ԟ�P�W�/��M��ܾ������I��T��� �� f� �E.u��Z��?�6MN-`x+T�W{���__|pOx?S����m�{�ڇ��P��~� �p~�?�k?�o��Ŀ �D� �`�g�i>4���=�#��4z͗���%���~,����^�����O���w��G�5?x��5�� �~��������A|(� �b|��� ����{��⿋��g_������_5O���V�.��[��<=sc�O����P�|s�k>0�f�^�gs����ϋ?e��w�����a~͟?༞���/�o�/���� �[�x��O���?�)�8�7��9���Cſ���~#�7��o�^���G���l4�ǭ��3��W�w�
�Z��_���xk�	���ྒྷ�~�^�����?�7�+�>>Hd�g��9e��[Ş��5�b;m[��U��mi��Cn|9=Ͳ	?��߰���$�u�~�_���]�����Ꮐ�����㷋?i�ڎ��
�xb� �G����&��/����K���?|K�~�
�X��S��En�7�����V��h��>xS��g���� 	�{_���L�xxV�֮5ߎ�u�Vz7�h����/yyj� 
�g�Y����归��.&�$oͿx����� h��c�ǿ���������ko~Ϳ5=ǿ���6�sxf+�<?�&�k�Zn������"�4O�(�?�m�{���Ӫ^a��� �l�~�>~�>0� �q�#��� 5��nO��#x��/��߆�/�dk��$�5��"�~8�=�j>G��:f���-�_�4�Ւ[�;I�n�>#�/�'�A�d�u�����Z��W�����~�R|����`�~�>;���� ��𗈿g� ���(���i�?[��?��k�ſG�hCH�-�Ϗ�Bu�E�`�;�J�w�<C� ���~ |V���'� k�#�7��s��$� �~k_ा���V��Ŧ�{�G��u��/[��+MGJ��I��෈<s�G��{<7C� ���@f/~�?�?�o��ǈ��qo��|7������O�߿#�ye/���(ܚ��� �|e�kھ��,�������~���5�����ƟcO���O�;�� ��� �	� ����-_G�������|��\���D��>G��?Z�tx�m'������L� ��-��9x��Q� ��~�>3���s�?�U��[��ҿ���'������~ٿ�i��c���7~����Wo����g�C�}���~�S�e���V	l��������i�_��� w��������΃c���Z�������i⟉��8𜚏��_�K��2�W/cg,�xOZ�W�������~� ���/�S�(� �������� �/غ��|��'��o�<���_��K���B�����x�M����^���+��<A�s�Rkz�zg�/:�Xm�
X����?�����d/��>8� �,|�+�;��o�� �6x�ǿ?m� ���	6�㿅����yi��#�_�,�f�+�	�ڔ,[�.��K,�~����*O��d�?o��'������
��d�c��_�������=kK��o���> ��<Q�/�.f��O/�߈�. ��> ���t�+{��|� ���>|N��to��I��� ����?�W��������~��~��z��N�<I���>3�-�	����ݮ���C�:-Ή��g]C��:�����a/�%�ω��������;�4�ݞ���<��Q\�˚������ߴ��I�[�G����w�O������CT���u�'�o4�P����H�� -��?g/�w����ǟ�/�O�� ?l��k�?�|�Yx{�'��e�|]o�-�_��[��� �W⎗z.�g��z]�γ��jױMkm9�3�� �_�������'�� ��o�|,��=�����
�� �Pߴo�'����m<W�PՖ?��~0����"�����x�§�^)�Hڢ=p_n��'��� ���jώ� <c�;���]�_|2ҼA�7��>"�_�>���െ��)���[ ���'𔗺o��a��֬��@E~r蟷��� '���O�� �@oدY���k����!�|]�_�k��	��i��ğ��xcF�x[�������S��Ѵ;A-���H�� �"?��'���?����h��_��3��K��~�����"���d�~��=�5�OH��uS�����7|C���� ��&�X�q��O�;i$� �_���G�,���� l/���	�������<i�5o��(��$�s�;�Y���Ui�&�>%i�z~�����BеgJѼ_�?��U�ɴ����^�7��f� �*x�������V/�z���K����a�N� �o��Z�o�c��s|0�t� ���e�ƻMI|U�Ǥ|+����WDwh�lG��DV0���~���
� �� ��x7�g>��|_�A��W���ֿ<e�x3������_����O���m�O�_�A�|�kķV�x_K��/,�n��߆� �p��_�D?e?|E�7�_��$�i�S�� ?i�?�ޝ�|s��~|7�����c����_�~�U���:&�Cmy�O��t�7=��Wß�(�� �� ����?� a�ك��=ꟷ�|Q���C���~�0��� �q��{H��6�z���i3��߄t�Ji���&��̶�ey� �� ��Se� >������|� ���:>3~�� ����j�C?�b	�cÞ$�����L𖑪˭Y��T�8Kȍ�����@� ��� �[����~� �H�o����	�>$�+�ςl��������<+����TռC�Z��	o�&�+o�O���qy;�j� �z� �,��� ?��~.��~|u�A�T~�� �/쉯� �84�|R�� '�>�� �t|^�7���6.����^��>x��Lѭ>kW^�Ǉ��B{�*k٠��� ��~���K��)��}k�ZxK㯅�+� �;x{�	��N]'�u��&���������K��~_�Ԥ�<5�"��v�Ѕ|�6"d�� �f�#�
A�)��7���l��`o�-w��_�o�4�E�i�~˿�����0��Z]���J�|=��=Ð� k���$�Aƨ�I� 4� �����Q��̾4��� c�x�������]��?���>"�W�a�-k�^!�� �x�'�,lmu?ٷ�^��=FM_����f�H�t.w� �W���g� �B|]� F� �'|w�oW�'��Q�➍�b����U�o�l���x�Ŗ?
�_�j�?fMO�P�zo�<fuK�v5-:�ReYG�_�_���
��Oڷ⏋>5xLѼM{�I|7��}�k�&��)���_���]O[�,�u���P���.S¶�~.B�Z���-B��_���\��?u|+� s� �_j��o��W�*���g����1�ُ�����3�V�ៃ�o�<�Z^��/����'�^$��-��R3Ħ��
���%/��������/m_�����q�;�Y�ۤM�o�m��φ?�/���j�6�]��0x�
��Y���I�G��5���e�}��џ�*�a���?�+��M�k�
�������,x�|k�)��X�?g�/���Z�__�~��hZ������#�i�UC�xδ�+�����?��?����'��� ���ڟ�P?����ֿg�G�?go|8���#i���~4��c�/��]J�� �>�ן
��� ���_h�n�u��&���ٿ���� ��ۤ|B���w�[����e������ �~�7������Z���#�����Z���_�S�|A�ŭ���^�6��0��f�?,?e?؇�?�/�� hMW�)�q�D��'�c�"j��Zv��w����1y���۲|}:����(?�/	k>'��Q�&Q��i�?�<ٵ$r��� ����;ڛ���<����g�����k^5��� o*_�;�Λ�῁c�� ��o�{��w�~ |PӚO�Қd��q��R�6pJ��7������>x���F��+G����⏃����\��|{���>0|3�O�h��C��(���<g�oO����;�^���wi�.��j6�C��h<��V� ��~տ>�ҿ?k�g���� mO�{����?<C�������>)x¾�%}�w�>
�U�����xz��>�^��Z�/����o3��g��%G�_���_�/���߰_���o|6ѼM��/�Z�ݢ�\������\�����J��Ѧ�:��ْ5��ɨ�_X�xB�m��?�����hO�ο����&W�k��y��������_�^�7�O�o�>+��>[x#�
j�	|��v?�[=��Jm���E^��o��� i��(��;��� �7�'��a�r�>����;M�~��7~���-7��.��\޸��B�����DB�ǖ6�]��Th��G�	/�*x��"��i��W�?��gOҾ&|_��b��;�����߀�|Si���}���)f���o����sil�����y'�YU�����K��5�ڏ�j���	���&���������7Ư��m�ڷ셭x�D��� k��vMU4����G�"�/x��iK5մ_^��H��`�o���
	�_���W�>�6�x������+ğ�g�|_�^�+����i��@�|9�����^�ſ�I�3_����̶V>$���!���CzW�� g�I�O�������%��~~�_�ms�|�������޹�O��������5�J|^�<y�n�N�|#�vO�Z��(𽾡��?5�
�öE�ç���� ���?����K����~|:���� ��/����^|I��|e�xk�0�KĖ���z� �~2iB/隅�mcS������NhaX�}� ��
�W���������h���?
/~
�,n� k�o�����|Ws�� �6�����_���;�=|�+�~=�^x�F�o����EYn��@>^��n��o������o�:~�� o� �zE����׏�a� 	� ��~��?�W�]k�� �|E��ş��ߴ�����P�ģ��h��Z|Z^�u�[��������� �����&�%���9� �b�j�x{���u�ώ�׭u�	|-�񇅮5x�=�m���&��^���T�,���!F�����ߴG�1y�o�9�/���_����ֱ�� m��֑�]�O�O�w6:�������[x��f���+��2���«gx�\:� ������	��� �c�����~ϟt��?�?����O���g�};�a�ܟ
|A����~$x���*�v��+�j^ �m5��x��̈́_ok�U���x �N��?ao�k�	�����j��C�Q��� �� �!����_������ԼC�� �����;�x3V�����Y����h��ܷ��J�K� ��_$��?g�� � i��Ӻ'���� �H	�M�����?hO|=_�������ְ��i�M��?��S�W��e o����a��_~�?b�ڣV����_��u�[M�>h��U�~�~9[��F��.mu���w��������L^im���� �� �J��_�E/�(��⯈�V��7�/�E���� 
e��>x�#��_��<g����_�=���x��'�>h����w��³�5!ӵin�p�Ė?�R��M��?����?ǟ� �:<}c�|v� ��|b����Ï��� |1��1�ǿ��F�߂f��F�����̑xsZoɩ�.�H�<#���%�y������/���� �$~ϟ
� k?�~;��>.���>>�|u��a�h�z��Mo�ߌ�-�����>�ѡ_x�<1���������a�i�����$W�~��,��?i��/?�iMO������~ǿ���c㟀4����}�~4_�C�r�%�:f�� <��_�8�A��⯉~5ܿ���U���w�յϲ5���{�i����?�Y� ��{��+/�������׋��
�'� �}/?f�e]������g�I<3�Y|[��$����g5��ך� ��пෟ�V/�/�
��S�k�G�?�G<�߉~3����_���Fԯ|S�x_�X�_�us��kx�w��V�i.�J�?�
I� �� Ƹ�/�P� ��� �
f�W?���t�����?l�[�~$��sg�i�/���iz]Ϗ�}J�ZK�k��״�2p�]�ڝ�}s������
!�~�_?f[ٓ����� Q��>|��������-�O×���?d��W��=�Ǎ��ǈ�m^�h//o��ec^��� �_�>��OٻO� ���g��� ��?� gϊ��߈���8xz���>2��s��f��9�o6�⸼=�� �/��\_����q�O~��	eo�%��S��+�_�S�� �V�o������?���_�9�
xo�w�K�������A���%���kP�T�o�)ejZt�*���q][�ᇂ� �:�f|P��<]� �� ��~ݟ~5|����/?�?���)ki����ŏ�̟�,^-�>^��*!��~��|#�m�];�����o}~�t�N>��P���� �g�?෾.�}� ����/�:�>��[���I��~%�S�>���l.|/�D�	y��ɨ=�惦�d������6�h��|Y�0�k�M���
��8� �������I����^�'��/�� �@[�������$5���:Χ������ڟ�˻�g�#✞)��W:]����h�>�����t� �H�\���k���
��b�#]�֫� :��G��ƞ&�� �5𭎇�<ٷÍ[Z��oI��M�t��(j�lz���:U��?1>~ٿ�L_�g�?��3~�?�L ~Ǟ�����W^$־����Ua�F�;ƚ�ώ�}'�2|<ӵ�O����{�+=R�Tӵ{��;{�9m׭� �!� ��<��?� e� ڗ������_�"���I���{��>o�'�>����߈�7�� �o������<I������`?V=����/2��~?� �h?d�/�k�)� �{��zO�����k�#�_�w���R�Cx���k���gN��,�%ߌMֹ�3NY�7�-���� p	����A�0|]� �W|i����� ���<-�h����|q��
��G��m�W���S�$-�3●|Qyu�xz�Ꮕ��u(���f��9��+�'��W����_?j�����S㟂�e�����s�6�?�ڷ�_~�?���c㯇�?��.��^����g��ռB�,��ǋ�[�}/���4Q��w���
�$|���/���ҿ���o��߳��ۋ����ۗX��x��ox�u�#����o�ckq�-� ������� Ŗ�o�J�7���C� j��+���8� �~�k�d��5��%O�?����C�ҷ?|�j��)�Oo�_�-K�X𯀴���:����o��x�ƺ��5�x{Aҵ�H[R�ƿm�߰6��A������ j��%����\~��'��� �/�� ����w�_�֘k� 5F��Ay������gX�A`l��t亚c����(� l_�$�������� ����c��0�� c	��� ����hT������|���3��</e�/h:�WU��Fg>#K��u&��_�3�����j_�s�
����������'���7�?�~��/��?���'��)t١�?���+t��!$;_Jt��m��A?�^��?h�� ���b�s����� f���� �x��ǎ�i�bx�>������'�g����M�}�5��6��+SӃϭ[^^��ӡ��z��G� g������_ؗ��� �Z�����`����_�Z��/�}�i�;�&�O��FO|3�2�?���k�$�
+�/�驥R�ҿ/?����E�������j_������� ��k���>|6���>�Y��~+K���Ěv����'��ĭ� �Zi��g�[]�4oy��%/5	f���}� ��� ��� � ��|pѿi�������������)��c�+O��k���<��+}�q��B�<��<}m�ˤY�x�MR����Y|����~<~Ǟ�9�,�2� ���~ x����~*��߶E���]k�>���Kҵ�� վ�N����sf�^x����� ��:5�܋}�Co �������?m/�� >$�x��w���3Z�~�Z¿����?��f_��bj�|�O|W�ץ�I�!�L��m_�>/�Y�/<���[�_�I7�3�U� ��?ঞ���L�/�}�����M����h��:�� �
�5����:o���M�_�_��\��!��G��h^-�5U���_�{�?�
�s� t�_��㯆:��O�����)�_���	�_�� l>h>,�l5��C���SD�1��\x^�]P��կӌ��_��3�j�3�G�q�R�4>*|e�7��|%��|	��㖟����k����8ֿf�>?	jZn�����]����z�����x�)4��� <o����$7������� �,��3���
e��۟�?�7?�E�^�ߵ���/�=���[�;X�+���گ�뿌z7����|V���������������|t��<� ����;���*^� �J<=�Y~������� ~��#�������m����!�Y�xu&���ῆ�~ҭ����iw�V�[��%7�����O��� ���� � �d|N0��~��>�`���o~�?�O�(���_|yԼY}��U��O�:n���^������5�Y���K�V�F�ߍ�7���	���?c��)��G�~:~�|]'����j��x����'�n��x�I<1�|<�/t� 
��໛���E�ԯ��>l������ş�*��3�/���!ߌ��[�q����=�_�T��
�� jz'ï�� -/����4�n��R�,>]�:��6�V���^:�)�L��ʊ<�����>���#���ϊ?����9x�n�������/�������/�	i/��.��8�K�όڕ��u�į\k�����\�լ�r�M�j� �ğg���
|� ����?���T�e៊� �ω�f?x6]����3_��2��Z��^��Q�˥�7���t�m��Ipw> � �?|g�+� {��kIt�~,�� ����O]~۟��:&���6�?i��u�?����5o�Xx:	�>¶��~��#�b��<3Nd������������/������
~�'��4���	G�?�^)��������k� �I�������z��Y/|c�}��_�MB��/���
k-.���߃�uO�?�C���-��?k�?�	A�!x���|���O��~���G��?j�c�_�E�>i�_� f�(|F�м;�_����u�K�x~�ſ�_��MO�S���~ҟ�R��/����߁��χe/�/�ݏ�m�~��_�ǅ�.�~"�g�5y�1���6��'G�<O��O�I�ig�$���YG�G���%�Ŀ�mG���!�?��^����N������Z���|P���-��������T����\�	��w_u��5�� ��B��B�
�n���}�gi߱_�3ß��_����I�|�Ğ$�_�;�s����P���>2�h<E��W��ɼs�~�~�6~1�o�M���|1OIoc���Οo�v� ���Y��W� `o�����'�� ���_�� �2?f_�P����j� ⧍�_�S�"������x�S�����T(Y<i���LL4�C$�d�?
� fO����#~�?	?��� � `_~�> ���~�_���?�����?g��W��Y��⟉�-J]S�~��KmC�����/�[O]x�N�tX���#A�?����V/�����/ǯ�'摬~��?�W�{τ���Þ
�����L�l�׏�F�k�Q�@|3��2�k��o����[�zn�m���Mgb��x�������R� �p|,���b-k�	_���,7�n<!�Nkߴ�?mk/���T��'�� 
�ǚf���I��^v�䲿��R��z
Gop~�i�<G��-��/����6�|=�|��b/�w�m5{/�g�
	����~&�G�O�'�٪Z�|:_���ǎ���T�.~�2΁�]~��t�+[�K� �bj�_�)������� �_���z�Xѿk/�z_�=O���ğ��2�P�_�4_x�x��������� ��"�u�7�l�c�Uqگ��Ii�?`���f� �K~��  ?e��[�#����O���������~�&�?�5���x��;�4=k�0�4���~�]��ŜzT���Ґ�h���>ݽ�7Xմ��Z����:6���M�꺝�6:~�el�I��.�d�{xQKI,����Z����g��㏧��W����o�m[�Z�s{���K[�tۻMOM���4]F��+{����5{B���^GŬM=��!� �����q����&SX�e��������v���su�,:��*K�4;�Ԧ���?��ie�jM�?�?`ҵH�]F�x�Nk{=R�+���&�n
+�E�joj�0܍:� ȒCgp#���kR�
�V�y��Zծ��@k����~(Ga�_x���i���㳱��iqm����#�w��MCF�^Ϫy�:Zo�����|v��5��Z��|;�s��1����K� J��ƕu�	>�u��jZT:���MBmk��)�lw�bi�ʀ{���[ᆭ��z���:���������Zk�t�z��}�z���(��!�Е��Q�'ё�X���$|s�0|?o��K���7Z��E��� 	���>�4�Ik��<�ht��.�b��MB�H��e�_�w���A��rx.����*��ɽ� �V�u�|?�|!k��<=��6V�ٍy�ZF�"��u��n�'k�C4Pk/�����kY��������4�}gF�<�>)j)��=_��mR��~��K�7����P�Cw�/���[��M絒���+?�� �j��υ�|S��jz������#���h�Z[���VFa<V�d��Q_�2�m^��ft3G�gM�w���o��>&��;Oi�X��Ŏ�gu���e�5=	��T�� ��m�M噚�[\[�d�4E�'��]�1�k�g����Z�K�:;C�ˍcC_��
iڷ�<;�h?ښ[� ���\wm�;m7U[K�����y�5��g������5?��W^-�.o<��ៀ�<I������4�
j�W�>�t_�+e��_Ɩ?���-
�Z�N��_��5��,�� ���>� �7�$�ޗ��z��O���u�G��m-�MV�G�nuk�>�i����L�t�P��+8䍮1"n��Ϗ�	�9%�/�����n`�5�JX�&v�ݖ���O"<V�ч��H�)��p�5�?�>��=7���>%���t��m��E��T����<C���MB��@�����R��ٛJ���3Kw$h�!�~�� 5]wQ����η�e�[���s���u��g�w��'�|Q{&���Y]'Ǻ՟�<%�j��^�m<-�6�o�L��j�R�	��[�j]6mf=7q�K�p]Ae5�9�����ݟ<I*.9�P��_��t���z��ދⱥ7�uU�{]U5�V�I��H���@�,3H-���r3����"/�>4��<#�/iZ���h:Ưy����<�xM�Q�MP�Ɗx��=����h�<?5�mOC�t+�u
^��~%xSJ�U�6_t/�C�?�#�~��^i�/�e�_�����w�G&�e��$�i���k=�Zn�����P?��Ϸ����Y����as���܈.u��t�2#�n�!ӯ�ia��]?L��/;E�̯o��w�,|_��~�t�_���l���R���f����Z�׃�|Wᑩ����zv�g�]x{I�߅��t�2�K����uO[���?�_�ۥ�\x�C���<K��r���Ş2ҥ��|E���O��υ�>��������=��� E�=���R�}�x�-�7m�xo�$�s���O|z��6��^�1��޼����|G���o��M�����vK[_o��M&�X���m��O�σt��㶹|�'��/��x�4x��M?���u�09^���=�  zu#?� �����\�ϧ>�袀�{� /�� ��������(���� ?��z
0=:� �� ��ӊ(��:��Ɠ'���~C�QE .��� ?�������c9�� @?1��ǀ.��� ?���E #��c����=.�O���������?����t���� ��=P��
            [firm_right_thumb_ftype] => image/png
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [1] => Array
        (
            [firm_id] => 3
            [firm_own_id] => 101492
            [firm_name] => SBDSMS
            [firm_reg_no] => 09ADEPA7418B1Z1
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => SRI BISHAMBHAR DAYAL SHRI MOHAN SARRAF
            [firm_desc] => SALE
            [firm_address] => NALA BAZAR
            [firm_city] => 
            [firm_phone_details] => 9927058746
            [firm_email] => amber.jls@gmail.com
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2018
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 183
            [firm_pan_no] => ADEPA7418B
            [firm_tin_no] => 09ADEPA7418B1Z1
            [firm_since] => 2018-05-15 15:30:13
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

    [2] => Array
        (
            [firm_id] => 4
            [firm_own_id] => 101492
            [firm_name] => rekha
            [firm_reg_no] => 0000000
            [firm_type] => Personal
            [firm_owner] => Self
            [firm_long_name] => rekha
            [firm_desc] => home
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2019
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 245
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2019-02-26 18:29:52
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101492","firm_name":"AAJ","firm_reg_no":"123","firm_type":"Personal","firm_owner":"Self","firm_long_name":"Amber Akshat Jewellers","firm_desc":"FINANCE AND SALE","firm_address":"nala bazar","firm_city":"","firm_phone_details":"9412591853","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"d41d8cd98f00b204e9800998ecf8427e","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"29901710","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2020","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"61","firm_pan_no":"","firm_tin_no":"12345678","firm_since":"2017-10-09 19:19:52","firm_principal_amt_limit":"","firm_left_thumb":null,"firm_left_thumb_ftype":"image\/png","firm_right_thumb":null,"firm_right_thumb_ftype":"image\/png","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"3","firm_own_id":"101492","firm_name":"SBDSMS","firm_reg_no":"09ADEPA7418B1Z1","firm_type":"Public","firm_owner":"Self","firm_long_name":"SRI BISHAMBHAR DAYAL SHRI MOHAN SARRAF","firm_desc":"SALE","firm_address":"NALA BAZAR","firm_city":null,"firm_phone_details":"9927058746","firm_email":"amber.jls@gmail.com","firm_comments":"","firm_smtp_email":null,"firm_smtp_pass":null,"firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2018","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"183","firm_pan_no":"ADEPA7418B","firm_tin_no":"09ADEPA7418B1Z1","firm_since":"2018-05-15 15:30:13","firm_principal_amt_limit":null,"firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":null,"firm_bank_acc_no":null,"firm_bank_ifsc_code":null,"firm_bank_declaration":null,"firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null},{"firm_id":"4","firm_own_id":"101492","firm_name":"rekha","firm_reg_no":"0000000","firm_type":"Personal","firm_owner":"Self","firm_long_name":"rekha","firm_desc":"home","firm_address":"","firm_city":null,"firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":null,"firm_smtp_pass":null,"firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2019","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"245","firm_pan_no":"","firm_tin_no":"","firm_since":"2019-02-26 18:29:52","firm_principal_amt_limit":null,"firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":null,"firm_bank_acc_no":null,"firm_bank_ifsc_code":null,"firm_bank_declaration":null,"firm_owner_sign":null,"firm_owner_sign_ftype":null,"firm_smtp_server":null,"firm_smtp_port":null,"firm_smtp_cc_email":null,"firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101972
            [firm_name] => TEST
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 74
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-06-08 11:19:57
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101972","firm_name":"TEST","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"74","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-06-08 11:19:57","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => CLD
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 148
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-06-10 13:08:39
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"2","firm_own_id":"101972","firm_name":"CLD","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"148","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-06-10 13:08:39","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101972
    [owner_login_id] => ommobile
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 2
            [firm_own_id] => 101972
            [firm_name] => CLD
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => 
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => 
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 148
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-06-10 13:08:39
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"2","firm_own_id":"101972","firm_name":"CLD","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"","firm_desc":"","firm_address":"","firm_city":"","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"148","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-06-10 13:08:39","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101148
    [owner_login_id] => omlite
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101148
            [firm_name] => 09
            [firm_reg_no] => 12
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omunim
            [firm_desc] => gold seller
            [firm_address] => pune
            [firm_city] => pune
            [firm_phone_details] => 7888501942
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-07-26 18:38:59
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101148","firm_name":"09","firm_reg_no":"12","firm_type":"Public","firm_owner":"Self","firm_long_name":"omunim","firm_desc":"gold seller","firm_address":"pune","firm_city":"pune","firm_phone_details":"7888501942","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-07-26 18:38:59","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]
 REQUEST_DATA:Array
(
    [api_login_token] => abc12313
    [api_prod_key] => 123123
    [api_request_id] => 123123
    [api_folder] => ommind/omunim
    [system_onoff] => OFFLINE
    [remote_login] => HTTP_REMOTE_LOGIN
    [function_name] => ALL_FIRMS
    [DB_HOST] => 127.0.0.1
    [DB_PORT] => 7188
    [DB_USER] => root
    [DB_PASSWORD] => omrolrsr
    [DB_DATABASE] => loveras1_101332
    [owner_login_id] => omsai
    [owner_user_staff_id] => 
    [owner_user_password] => 99255821b1bb07136a5addccfd2513ec
    [firm_id] => 
)

 REQUEST_DATA:Array
(
    [0] => Array
        (
            [firm_id] => 1
            [firm_own_id] => 101332
            [firm_name] => abcd
            [firm_reg_no] => 
            [firm_type] => Public
            [firm_owner] => Self
            [firm_long_name] => omsai jewellers
            [firm_desc] => 
            [firm_address] => 
            [firm_city] => pune
            [firm_phone_details] => 
            [firm_email] => 
            [firm_comments] => 
            [firm_smtp_email] => 
            [firm_smtp_pass] => 
            [firm_formN] => 
            [firm_formR] => 
            [firm_form_header] => SHUBH LABH
            [firm_form_footer] => NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL
            [firm_op_cash_bal] => 
            [firm_op_cash_bal_crdr] => CR
            [firm_op_cash_date] => 01 APR 2022
            [firm_op_gold_bal] => 
            [firm_op_gold_bal_wtype] => 
            [firm_op_gold_bal_crdr] => 
            [firm_op_silv_bal] => 
            [firm_op_silv_bal_wtype] => 
            [firm_op_silv_bal_crdr] => 
            [firm_capital_acc_id] => 73
            [firm_pan_no] => 
            [firm_tin_no] => 
            [firm_since] => 2022-08-16 16:48:04
            [firm_principal_amt_limit] => 
            [firm_left_thumb] => 
            [firm_left_thumb_ftype] => 
            [firm_right_thumb] => 
            [firm_right_thumb_ftype] => 
            [firm_other_info] => 
            [firm_bank_details] => 
            [firm_bank_acc_no] => 
            [firm_bank_ifsc_code] => 
            [firm_bank_declaration] => 
            [firm_owner_sign] => 
            [firm_owner_sign_ftype] => 
            [firm_smtp_server] => 
            [firm_smtp_port] => 
            [firm_smtp_cc_email] => 
            [firm_staff_id] => 
        )

)

 rowDetailsArr:[{"firm_id":"1","firm_own_id":"101332","firm_name":"abcd","firm_reg_no":"","firm_type":"Public","firm_owner":"Self","firm_long_name":"omsai jewellers","firm_desc":"","firm_address":"","firm_city":"pune","firm_phone_details":"","firm_email":"","firm_comments":"","firm_smtp_email":"","firm_smtp_pass":"","firm_formN":"","firm_formR":"","firm_form_header":"SHUBH LABH","firm_form_footer":"NOTE: INTEREST SHOULD BE PAID AFTER 11 MONTHS WITHOUT FAIL","firm_op_cash_bal":"","firm_op_cash_bal_crdr":"CR","firm_op_cash_date":"01 APR 2022","firm_op_gold_bal":"","firm_op_gold_bal_wtype":"","firm_op_gold_bal_crdr":"","firm_op_silv_bal":"","firm_op_silv_bal_wtype":"","firm_op_silv_bal_crdr":"","firm_capital_acc_id":"73","firm_pan_no":"","firm_tin_no":"","firm_since":"2022-08-16 16:48:04","firm_principal_amt_limit":"","firm_left_thumb":"","firm_left_thumb_ftype":"","firm_right_thumb":"","firm_right_thumb_ftype":"","firm_other_info":null,"firm_bank_details":"","firm_bank_acc_no":"","firm_bank_ifsc_code":"","firm_bank_declaration":"","firm_owner_sign":"","firm_owner_sign_ftype":"","firm_smtp_server":"","firm_smtp_port":"","firm_smtp_cc_email":"","firm_staff_id":null}]