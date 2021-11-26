@extends("layouts.master")
@section('obsah')
<div>
    <button class="btn-rent">
        POŽIČAŤ
    </button>
</div>
<div class="search-bar">
    <label>
        <input type="search" class="search-bar-input" placeholder="vyhľadaj položku">
    </label>
    <img src="../imgs/icons/search.png" alt="search icon" class="search-bar-icon">
</div>
<div style="overflow-x: auto">
    <table>
        <tr>
            <th></th>
            <th>č.</th>
            <th>Položka</th>
            <th>ks</th>
            <th>qty</th>
            <th>Určenie</th>
            <th>Typ</th>
            <th>Inputy</th>
            <th>Outputy</th>
            <th>Dokumenty</th>
        </tr>
        <tr>
            <td><label>
                    <input type="checkbox"/>
            </label></td>
            <td>1.</td>
            <td>Shure SM58 LCE</td>
            <td>3</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1FgQY_OoEoihLTb838bhTzm2nOBDYHs4p/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>2.</td>
            <td>Shure SM57 LCE</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>3.</td>
            <td>Shure Beta 52A</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>4.</td>
            <td>Behringer X32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>32xXLR, 6x6,3mm, 1xRCA, MIDI, USB-B, RJ45</td>
            <td>18xXLR, 2xAES50, 8x6,3mm, 1x2RCA, MIDI, USB-B, RJ45, AES/EBU</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1UqU8eSFGs4mwKJZ4h-BiRqUstr1kEBy9?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>5.</td>
            <td>Behringer S32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>stagebox</td>
            <td>32xXLR, 2xAES50, USB-B, MIDI</td>
            <td>16xXLR, RJ45, ADAT, AES/EBU, MIDI</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1NOwjwY8aCMvtFeFkOzE73LoRQZ_Lpm2A?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>6.</td>
            <td>Yamaha MG124C-X</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>6xXLR, 8x6,3mm, 3xRCA</td>
            <td>2xXLR, 4x6,3mm, RCA</td>
            <td>
                <a href="https://drive.google.com/file/d/1LuVcqaiwIkwEJAWIKVcFgD5XbMv59ubw/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>7.</td>
            <td>Yamaha MG166C-USB</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>10xXLR, 3xRCA, 12x6,3mm</td>
            <td>2xXLR, 4x6,3mm, RCA, USB-B</td>
            <td>
                <a href="https://drive.google.com/file/d/1EwYWB0rRfoMQ1-5dm7W7ZSFiqYQfeKHd/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>8.</td>
            <td>EV ZLX-15P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1e97ZuWrKezTM7uxdUn8FObaPnyru8sWy/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>9.</td>
            <td>EV ZLX-12P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1rMsCt5NUc5cjsnUUXcvqwzxZMq4cbINI/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>10.</td>
            <td>RH sound 380W</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>RCA; 2xXLR, 6,3mm</td>
            <td>XLR, 6,3mm</td>
            <td>-</td>
        </tr>

        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>1.</td>
            <td>Shure SM58 LCE</td>
            <td>3</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1FgQY_OoEoihLTb838bhTzm2nOBDYHs4p/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>2.</td>
            <td>Shure SM57 LCE</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>3.</td>
            <td>Shure Beta 52A</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>4.</td>
            <td>Behringer X32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>32xXLR, 6x6,3mm, 1xRCA, MIDI, USB-B, RJ45</td>
            <td>18xXLR, 2xAES50, 8x6,3mm, 1x2RCA, MIDI, USB-B, RJ45, AES/EBU</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1UqU8eSFGs4mwKJZ4h-BiRqUstr1kEBy9?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>5.</td>
            <td>Behringer S32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>stagebox</td>
            <td>32xXLR, 2xAES50, USB-B, MIDI</td>
            <td>16xXLR, RJ45, ADAT, AES/EBU, MIDI</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1NOwjwY8aCMvtFeFkOzE73LoRQZ_Lpm2A?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>6.</td>
            <td>Yamaha MG124C-X</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>6xXLR, 8x6,3mm, 3xRCA</td>
            <td>2xXLR, 4x6,3mm, RCA</td>
            <td>
                <a href="https://drive.google.com/file/d/1LuVcqaiwIkwEJAWIKVcFgD5XbMv59ubw/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>7.</td>
            <td>Yamaha MG166C-USB</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>10xXLR, 3xRCA, 12x6,3mm</td>
            <td>2xXLR, 4x6,3mm, RCA, USB-B</td>
            <td>
                <a href="https://drive.google.com/file/d/1EwYWB0rRfoMQ1-5dm7W7ZSFiqYQfeKHd/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>8.</td>
            <td>EV ZLX-15P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1e97ZuWrKezTM7uxdUn8FObaPnyru8sWy/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>9.</td>
            <td>EV ZLX-12P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1rMsCt5NUc5cjsnUUXcvqwzxZMq4cbINI/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>10.</td>
            <td>RH sound 380W</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>RCA; 2xXLR, 6,3mm</td>
            <td>XLR, 6,3mm</td>
            <td>-</td>
        </tr>

        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>1.</td>
            <td>Shure SM58 LCE</td>
            <td>3</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1FgQY_OoEoihLTb838bhTzm2nOBDYHs4p/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>2.</td>
            <td>Shure SM57 LCE</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>3.</td>
            <td>Shure Beta 52A</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mic</td>
            <td>-</td>
            <td>XLR</td>
            <td>
                <a href="https://drive.google.com/file/d/1Mv0dN1gF2NZVN5RaabWT3e7iSI4NKHGr/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>4.</td>
            <td>Behringer X32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>32xXLR, 6x6,3mm, 1xRCA, MIDI, USB-B, RJ45</td>
            <td>18xXLR, 2xAES50, 8x6,3mm, 1x2RCA, MIDI, USB-B, RJ45, AES/EBU</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1UqU8eSFGs4mwKJZ4h-BiRqUstr1kEBy9?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>5.</td>
            <td>Behringer S32</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>stagebox</td>
            <td>32xXLR, 2xAES50, USB-B, MIDI</td>
            <td>16xXLR, RJ45, ADAT, AES/EBU, MIDI</td>
            <td>
                <a href="https://drive.google.com/drive/folders/1NOwjwY8aCMvtFeFkOzE73LoRQZ_Lpm2A?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>6.</td>
            <td>Yamaha MG124C-X</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>6xXLR, 8x6,3mm, 3xRCA</td>
            <td>2xXLR, 4x6,3mm, RCA</td>
            <td>
                <a href="https://drive.google.com/file/d/1LuVcqaiwIkwEJAWIKVcFgD5XbMv59ubw/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>7.</td>
            <td>Yamaha MG166C-USB</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>mix</td>
            <td>10xXLR, 3xRCA, 12x6,3mm</td>
            <td>2xXLR, 4x6,3mm, RCA, USB-B</td>
            <td>
                <a href="https://drive.google.com/file/d/1EwYWB0rRfoMQ1-5dm7W7ZSFiqYQfeKHd/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>8.</td>
            <td>EV ZLX-15P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1e97ZuWrKezTM7uxdUn8FObaPnyru8sWy/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>9.</td>
            <td>EV ZLX-12P</td>
            <td>2</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>3,5mm; 2xXLR/6,3mm hybrid</td>
            <td>XLR/6,3mm hybrid</td>
            <td>
                <a href="https://drive.google.com/file/d/1rMsCt5NUc5cjsnUUXcvqwzxZMq4cbINI/view?usp=sharing"
                   target="_blank">
                    manual
                </a>
            </td>
        </tr>
        <tr>
            <td><label>
                <input type="checkbox"/>
            </label></td>
            <td>10.</td>
            <td>RH sound 380W</td>
            <td>1</td>
            <td>
                <label>
                    <input type="number" class="small" value="0">
                </label>
            </td>
            <td>audio</td>
            <td>PA</td>
            <td>RCA; 2xXLR, 6,3mm</td>
            <td>XLR, 6,3mm</td>
            <td>-</td>
        </tr>
    </table>
</div>
@endsection